<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit87594e32d31e9b332074f357a5fdd938
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit87594e32d31e9b332074f357a5fdd938', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit87594e32d31e9b332074f357a5fdd938', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit87594e32d31e9b332074f357a5fdd938::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}