<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c4984c9be39a439c7f2b6925a936d3e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sociomantic\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sociomantic\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c4984c9be39a439c7f2b6925a936d3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c4984c9be39a439c7f2b6925a936d3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}