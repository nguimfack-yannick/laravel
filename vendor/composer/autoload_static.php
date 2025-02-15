<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88ea190a088c02354116a26b92b2d60d
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nguimfack\\Ooo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nguimfack\\Ooo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit88ea190a088c02354116a26b92b2d60d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88ea190a088c02354116a26b92b2d60d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88ea190a088c02354116a26b92b2d60d::$classMap;

        }, null, ClassLoader::class);
    }
}
