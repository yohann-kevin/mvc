<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fbcea1b3e1ff53f01daf8cbe5d99640
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Project\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Project\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fbcea1b3e1ff53f01daf8cbe5d99640::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fbcea1b3e1ff53f01daf8cbe5d99640::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
