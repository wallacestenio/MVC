<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd6b49f37bbc157e9ea0560a9496f3e0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd6b49f37bbc157e9ea0560a9496f3e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd6b49f37bbc157e9ea0560a9496f3e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd6b49f37bbc157e9ea0560a9496f3e0::$classMap;

        }, null, ClassLoader::class);
    }
}
