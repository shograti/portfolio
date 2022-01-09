<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc374ad8cc7530c70131dd2b39246c17f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc374ad8cc7530c70131dd2b39246c17f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc374ad8cc7530c70131dd2b39246c17f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc374ad8cc7530c70131dd2b39246c17f::$classMap;

        }, null, ClassLoader::class);
    }
}