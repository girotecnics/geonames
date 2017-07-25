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
 * Girotecnics\Geonames\Models\GeonamesCountryInfo
 *
 * @property string $iso
 * @property string $iso3
 * @property string $iso_numeric
 * @property string $fips
 * @property string $country
 * @property string $capital
 * @property integer $area
 * @property integer $population
 * @property string $continent_code
 * @property integer $continent_id
 * @property string $tld
 * @property string $currency_code
 * @property string $currency_name
 * @property string $phone
 * @property string $postal_code_format
 * @property string $postal_code_regex
 * @property string $languages
 * @property integer $geoname_id
 * @property string $neighbors
 * @property string $equivalent_fips_code
 * @property-read \Girotecnics\Geonames\Models\GeonamesTimezone $timezone
 * @property-read \Girotecnics\Geonames\Models\GeonamesGeoname $continent
 * @method static whereIso($value)
 * @method static whereIso3($value)
 * @method static whereIsoNumeric($value)
 * @method static whereFips($value)
 * @method static whereCountry($value)
 * @method static whereCapital($value)
 * @method static whereArea($value)
 * @method static wherePopulation($value)
 * @method static whereContinentCode($value)
 * @method static whereContinentId($value)
 * @method static whereTld($value)
 * @method static whereCurrencyCode($value)
 * @method static whereCurrencyName($value)
 * @method static wherePhone($value)
 * @method static wherePostalCodeFormat($value)
 * @method static wherePostalCodeRegex($value)
 * @method static whereLanguages($value)
 * @method static whereGeonameId($value)
 * @method static whereNeighbors($value)
 * @method static whereEquivalentFipsCode($value)
 * @mixin \Eloquent
 * @package Geonames
 */
class GeonamesCountryInfo extends Model
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
    protected $primaryKey = 'iso';

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
     * One-to-One relation with GeonamesTimezone
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function timezone()
    {
        return $this->hasOne(GeonamesTimezone::class, 'country_code');
    }

    /**
     * One-to-One relation with GeonamesGeonames
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function continent()
    {
        return $this->hasOne(GeonamesGeoname::class, 'geoname_id', 'continent_id');
    }
}
