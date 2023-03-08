<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita699be1bab3eba97d96418f6d912f972
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ess\\App\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ess\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita699be1bab3eba97d96418f6d912f972::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita699be1bab3eba97d96418f6d912f972::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita699be1bab3eba97d96418f6d912f972::$classMap;

        }, null, ClassLoader::class);
    }
}
