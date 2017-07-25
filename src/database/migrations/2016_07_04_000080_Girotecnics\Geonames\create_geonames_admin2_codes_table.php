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
namespace Girotecnics\Geonames;

/**
 * User: Evren Yurtesen
 * Date: 04-Jul-16
 * Time: 5:14 PM
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create Geonames Tables
 *
 * @package Geonames
 */
class CreateGeonamesAdmin2CodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \Schema::create('geonames_admin2_codes', function (Blueprint $table) {
            $table->string('code', 20)->unique();
            $table->string('name', 100)->unique();
            $table->string('name_ascii', 100)->unique();
            $table->integer('geoname_id')->primary()->unsigned();
            $table
                ->foreign('geoname_id')
                ->references('geoname_id')
                ->on('geonames_geonames')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \Schema::drop('geonames_admin2_codes');
    }
}
