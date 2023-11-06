<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit760dd67f7aff2eaf9d12eae50b6d15e7
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit760dd67f7aff2eaf9d12eae50b6d15e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit760dd67f7aff2eaf9d12eae50b6d15e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit760dd67f7aff2eaf9d12eae50b6d15e7::$classMap;

        }, null, ClassLoader::class);
    }
}
