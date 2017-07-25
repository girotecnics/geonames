<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit921de74c4f132b4735dac261045278ae
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Filesystem\\' => 22,
            'Illuminate\\Database\\' => 20,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
            'Illuminate\\Console\\' => 19,
            'Illuminate\\Config\\' => 18,
        ),
        'G' => 
        array (
            'Girotecnics\\Geonames\\' => 21,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 26,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/filesystem',
        ),
        'Illuminate\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/database',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'Illuminate\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/console',
        ),
        'Illuminate\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/config',
        ),
        'Girotecnics\\Geonames\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Doctrine\\Common\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'Girotecnics\\Geonames\\Models\\GeonamesAdmin1Code' => __DIR__ . '/../..' . '/src/Models/GeonamesAdmin1Code.php',
        'Girotecnics\\Geonames\\Models\\GeonamesAdmin2Code' => __DIR__ . '/../..' . '/src/Models/GeonamesAdmin2Code.php',
        'Girotecnics\\Geonames\\Models\\GeonamesAlternateName' => __DIR__ . '/../..' . '/src/Models/GeonamesAlternateName.php',
        'Girotecnics\\Geonames\\Models\\GeonamesCountryInfo' => __DIR__ . '/../..' . '/src/Models/GeonamesCountryInfo.php',
        'Girotecnics\\Geonames\\Models\\GeonamesFeatureCode' => __DIR__ . '/../..' . '/src/Models/GeonamesFeatureCode.php',
        'Girotecnics\\Geonames\\Models\\GeonamesGeoname' => __DIR__ . '/../..' . '/src/Models/GeonamesGeoname.php',
        'Girotecnics\\Geonames\\Models\\GeonamesHierarchy' => __DIR__ . '/../..' . '/src/Models/GeonamesHierarchy.php',
        'Girotecnics\\Geonames\\Models\\GeonamesIsoLanguageCode' => __DIR__ . '/../..' . '/src/Models/GeonamesIsoLanguageCode.php',
        'Girotecnics\\Geonames\\Models\\GeonamesTimezone' => __DIR__ . '/../..' . '/src/Models/GeonamesTimezone.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit921de74c4f132b4735dac261045278ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit921de74c4f132b4735dac261045278ae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit921de74c4f132b4735dac261045278ae::$classMap;

        }, null, ClassLoader::class);
    }
}
