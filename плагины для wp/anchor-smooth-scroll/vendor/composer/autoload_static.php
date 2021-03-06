<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit409b275af6fe40e4b2a9857bb82ceb6b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SmoothScroll\\' => 13,
        ),
        'P' => 
        array (
            'Premmerce\\SDK\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SmoothScroll\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Premmerce\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/premmerce/wordpress-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit409b275af6fe40e4b2a9857bb82ceb6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit409b275af6fe40e4b2a9857bb82ceb6b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
