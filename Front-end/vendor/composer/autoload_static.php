<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2401b6c5f9ef30a6d7108df6a3e47c12
{
    public static $files = array (
        'e4f7c44913b3a753d874198323951991' => __DIR__ . '/../..' . '/biblioteca.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2401b6c5f9ef30a6d7108df6a3e47c12::$classMap;

        }, null, ClassLoader::class);
    }
}
