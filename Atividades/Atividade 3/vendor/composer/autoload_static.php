<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ae370b2bd3fcb14ad4d3519758d0308
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SebastianBergmann\\Timer\\Duration' => __DIR__ . '/..' . '/phpunit/php-timer/src/Duration.php',
        'SebastianBergmann\\Timer\\Exception' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/Exception.php',
        'SebastianBergmann\\Timer\\NoActiveTimerException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/NoActiveTimerException.php',
        'SebastianBergmann\\Timer\\ResourceUsageFormatter' => __DIR__ . '/..' . '/phpunit/php-timer/src/ResourceUsageFormatter.php',
        'SebastianBergmann\\Timer\\TimeSinceStartOfRequestNotAvailableException' => __DIR__ . '/..' . '/phpunit/php-timer/src/exceptions/TimeSinceStartOfRequestNotAvailableException.php',
        'SebastianBergmann\\Timer\\Timer' => __DIR__ . '/..' . '/phpunit/php-timer/src/Timer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5ae370b2bd3fcb14ad4d3519758d0308::$classMap;

        }, null, ClassLoader::class);
    }
}
