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
 * Girotecnics\Geonames\Models\GeonamesTimezone
 *
 * @property string $timezone_id
 * @property string $country_code
 * @property float $gmt_offset
 * @property float $dst_offset
 * @property float $raw_offset
 * @method static \Illuminate\Database\Query\Builder|\Girotecnics\Geonames\Models\GeonamesTimezone whereTimezoneId($value)
 * @method static \Illuminate\Database\Query\Builder|\Girotecnics\Geonames\Models\GeonamesTimezone whereCountryCode($value)
 * @method static \Illuminate\Database\Query\Builder|\Girotecnics\Geonames\Models\GeonamesTimezone whereGmtOffset($value)
 * @method static \Illuminate\Database\Query\Builder|\Girotecnics\Geonames\Models\GeonamesTimezone whereDstOffset($value)
 * @method static \Illuminate\Database\Query\Builder|\Girotecnics\Geonames\Models\GeonamesTimezone whereRawOffset($value)
 * @mixin \Eloquent
 */
class GeonamesTimezone extends Model
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
    protected $primaryKey = 'timezone_id';

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
    

}