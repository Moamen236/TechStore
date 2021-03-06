<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dcb9a4e7b9fada3bd0919f7ffe1d3d2
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TechStore\\Classes\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TechStore\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dcb9a4e7b9fada3bd0919f7ffe1d3d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dcb9a4e7b9fada3bd0919f7ffe1d3d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0dcb9a4e7b9fada3bd0919f7ffe1d3d2::$classMap;

        }, null, ClassLoader::class);
    }
}
