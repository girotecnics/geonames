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
 * Date: 06-Jul-16
 * Time: 11:30 AM
 */

namespace Girotecnics\Geonames\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Girotecnics\Geonames\Models\GeonamesAdmin2Code
 *
 * @property string $code
 * @property string $name
 * @property string $name_ascii
 * @property integer $geoname_id
 * @property-read \Girotecnics\Geonames\Models\GeonamesGeoname $geoname
 * @property-read \Girotecnics\Geonames\Models\GeonamesHierarchy[] $hierarchies
 * @method static \Girotecnics\Geonames\Models\GeonamesAdmin2Code whereCode($value)
 * @method static \Girotecnics\Geonames\Models\GeonamesAdmin2Code whereName($value)
 * @method static \Girotecnics\Geonames\Models\GeonamesAdmin2Code whereNameAscii($value)
 * @method static \Girotecnics\Geonames\Models\GeonamesAdmin2Code whereGeonameId($value)
 * @mixin \Eloquent
 * @package Geonames
 */
class GeonamesAdmin2Code extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'geoname_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * One-to-One relation with GeonamesGeonames
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function geoname()
    {
        return $this->hasOne(GeonamesGeoname::class, 'geoname_id', 'geoname_id');
    }

    /**
     * One-to-Many relation with GeonamesGeonames
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hierarchies()
    {
        return $this->hasMany(GeonamesHierarchy::class, 'parent_id', 'geoname_id');
    }
}
