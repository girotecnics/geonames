<?php
/**
 *     This is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 *
 *     This is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 *
 *     You should have received a copy of the GNU General Public License
 *     along with this.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * User: Evren Yurtesen
 * Date: 05-Jul-16
 * Time: 3:26 PM
 */

namespace Girotecnics\Geonames\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

/**
 * Install Geonames
 *
 * @package Geonames
 */
class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'geonames:install {--force : Overwrite any existing files.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the migrations and config';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new Constructor instance.
     *
     * @param Filesystem $files Filesystem
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $paths = ServiceProvider::pathsToPublish(
            'Girotecnics\Geonames\GeonamesServiceProvider'
        );

        foreach ($paths as $from => $to) {
            if ($this->files->isFile($from)) {
                $this->publishFile($from, $to);
            } elseif ($this->files->isDirectory($from)) {
                $this->publishDirectory($from, $to);
            }
        }

        $this->info("Installation complete!");
    }

    /**
     * Publish the file to the given path.
     *
     * @param  string $from From
     * @param  string $to   To
     *
     * @return void
     */
    protected function publishFile($from, $to)
    {
        if (!$this->files->exists($to) || $this->option('force')) {
            $this->createParentDirectory(dirname($to));

            $this->files->copy($from, $to);

            $this->status($from, $to, 'File');
        }
    }

    /**
     * Publish the directory to the given directory.
     *
     * @param  string $from From
     * @param  string $to   To
     *
     * @return void
     */
    protected function publishDirectory($from, $to)
    {
        $toContents = $this->files->files($to);
        $fromContents = $this->files->files($from);

        foreach ($fromContents as $file) {
            $newFile = $to . DIRECTORY_SEPARATOR
                . $this->files->name($file)
                . '.' . $this->files->extension($file);

            if ($this->files->isFile($file)
                && (!in_array($newFile, $toContents)
                || $this->option('force'))) {
                $this->files->copy($file, $newFile);
            }
        }

        $this->status($from, $to, 'Directory');
    }

    /**
     * Create the directory to house the published files if needed.
     *
     * @param  string $directory Directory
     *
     * @return void
     */
    protected function createParentDirectory($directory)
    {
        if (!$this->files->isDirectory($directory)) {
            $this->files->makeDirectory($directory, 0755, true);
        }
    }

    /**
     * Write a status message to the console.
     *
     * @param  string $from From
     * @param  string $to   To
     * @param  string $type Type
     *
     * @return void
     */
    protected function status($from, $to, $type)
    {
        $from = str_replace(base_path(), '', realpath($from));

        $to = str_replace(base_path(), '', realpath($to));

        $this->line(
            '<info>Copied ' . $type
            . '</info> <comment>[' . $from
            . ']</comment> <info>To</info> <comment>['
            . $to . ']</comment>'
        );
    }
}
