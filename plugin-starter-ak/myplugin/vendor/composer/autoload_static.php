<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33d65f685bbf4172df5b98f03d9c271f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33d65f685bbf4172df5b98f03d9c271f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33d65f685bbf4172df5b98f03d9c271f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33d65f685bbf4172df5b98f03d9c271f::$classMap;

        }, null, ClassLoader::class);
    }
}