<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfedd0a493a72e04a28a7c37b94b588a9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'ScssPhp\\ScssPhp\\' => 16,
        ),
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfedd0a493a72e04a28a7c37b94b588a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfedd0a493a72e04a28a7c37b94b588a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfedd0a493a72e04a28a7c37b94b588a9::$classMap;

        }, null, ClassLoader::class);
    }
}