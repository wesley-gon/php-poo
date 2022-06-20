<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f03a05ab9418d32f14f947b4709c0c6
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Biblioteca\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Biblioteca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f03a05ab9418d32f14f947b4709c0c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f03a05ab9418d32f14f947b4709c0c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f03a05ab9418d32f14f947b4709c0c6::$classMap;

        }, null, ClassLoader::class);
    }
}