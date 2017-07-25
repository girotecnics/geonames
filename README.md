# Laravel Geonames

[![Latest Stable Version](https://poser.pugx.org/girotecnics/geonames/v/stable)](https://packagist.org/packages/girotecnics/geonames)
[![Total Downloads](https://poser.pugx.org/girotecnics/geonames/downloads)](https://packagist.org/packages/girotecnics/geonames)
[![Latest Unstable Version](https://poser.pugx.org/girotecnics/geonames/v/unstable)](https://packagist.org/packages/girotecnics/geonames)
[![License](https://poser.pugx.org/girotecnics/geonames/license)](https://packagist.org/packages/girotecnics/geonames)

This package provides probably the best Eloquent models, most complete SQL schemas and fastest Artisan commands to import/update a local copy of [GeoNames](http://www.geonames.org/) databases.

## Installation

Please include the following require in your composer.json :

	{
	    "require": {
	        "girotecnics/geonames": "~1.0"
	    }
	}

or install using command line :

	composer require "girotecnics/geonames" "~1.0"

after installation, you will need to add the service provider in your config\app.php to 'providers' array

	Girotecnics\Geonames\GeonamesServiceProvider::class,

and execute installation, download and seed

    php artisan geonames:install
	php artisan migrate
	php artisan geonames:download
	php artisan geonames:seed


*Note:* If you are using Lumen. You have to first install [irazasyed/larasupport](https://github.com/irazasyed/larasupport) !

## Usage and Configuration

Please see the [wiki](https://github.com/yurtesen/geonames/wiki) for further information

## Provided Eloquent Models

Please see the *Wiki* pages for implementation details.

| Name                | Key       |Relations                                  | Scopes                 |
|---------------------|-----------|-------------------------------------------|------------------------|
|GeonamesGeoname      |geoname_id |alternateName, timeZone,country            |admin1,city,countryInfo |
|GeonamesAlternateName|geoname_id |geoname                                    |                        |
|GeonamesCountryInfo  |iso        |timezone,continent                         |                        |
|GeonamesFeatureCode  |code       |                                           |                        |
|GeonamesLanguageCode |iso_639_3  |                                           |                        |
|GeonamesTimezone     |timezone_id|                                           |                        |
|GeonamesHierarchy    |parent_id  |                                           |                        |
|GeonamesAdmin1Code   |geoname_id |geoname,hierarchies                        |                        |
|GeonamesAdmin2Code   |geoname_id |geoname,hierarchies                        |                        |

## Tables
GeoNames file names and corresponding table names created in your database.

|Filename             |Tablename                |
|---------------------|-------------------------|
|timeZones.txt        |geonames_timezones       |
|allCountries.zip     |geonames_geonames        |
|countryInfo.txt      |geonames_country_infos   |
|iso-languagecodes.txt|geonames_language_codes  |
|alternateNames.zip   |geonames_alternate_names |
|hierarchy.zip        |geonames_hierarchies     |
|admin1CodesASCII.txt |geonames_admin1_codes    |
|admin2Codes.txt      |geonames_admin2_codes    |
|featureCodes_en.txt  |geonames_feature_codes   |

## If You Need Help
Please check the [wiki](https://github.com/yurtesen/geonames/wiki) for more information about how to utilize the package efficiently and usage examples. If something does not work or if you have a suggestion, please do not hesitate to use the issue tracker.

*Note:* If you are using Lumen. You have to first install [irazasyed/larasupport](https://github.com/irazasyed/larasupport) !

