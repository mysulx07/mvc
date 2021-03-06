<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0acaa19e908bd5ed00bf0749fefc3551
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sulx\\Mvc\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sulx\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0acaa19e908bd5ed00bf0749fefc3551::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0acaa19e908bd5ed00bf0749fefc3551::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0acaa19e908bd5ed00bf0749fefc3551::$classMap;

        }, null, ClassLoader::class);
    }
}
