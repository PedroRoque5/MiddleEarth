<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3da0218a0ef5d7b83923a296085d660
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pedro\\MeuSite\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pedro\\MeuSite\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita3da0218a0ef5d7b83923a296085d660::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3da0218a0ef5d7b83923a296085d660::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3da0218a0ef5d7b83923a296085d660::$classMap;

        }, null, ClassLoader::class);
    }
}