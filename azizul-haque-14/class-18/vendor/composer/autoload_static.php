<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98cb5937d526305f3ae2c5196096c2c2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98cb5937d526305f3ae2c5196096c2c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98cb5937d526305f3ae2c5196096c2c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98cb5937d526305f3ae2c5196096c2c2::$classMap;

        }, null, ClassLoader::class);
    }
}
