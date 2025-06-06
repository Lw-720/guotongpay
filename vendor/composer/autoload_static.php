<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2e49026d452810ec1a4553e13560593
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lw720\\Guotongpay\\' => 17,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lw720\\Guotongpay\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2e49026d452810ec1a4553e13560593::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2e49026d452810ec1a4553e13560593::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2e49026d452810ec1a4553e13560593::$classMap;

        }, null, ClassLoader::class);
    }
}
