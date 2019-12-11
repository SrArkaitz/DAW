<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb08b82131e431ec4954b2ecf6c36a57b
{
    public static $classMap = array (
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/Exception.php',
        'SebastianBergmann\\Timer\\RuntimeException' => __DIR__ . '/..' . '/phpunit/php-timer/src/RuntimeException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb08b82131e431ec4954b2ecf6c36a57b::$classMap;

        }, null, ClassLoader::class);
    }
}