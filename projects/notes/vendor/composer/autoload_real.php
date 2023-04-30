<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite865f5e7ffb1fea52d5521e86b800851
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

        spl_autoload_register(array('ComposerAutoloaderInite865f5e7ffb1fea52d5521e86b800851', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite865f5e7ffb1fea52d5521e86b800851', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite865f5e7ffb1fea52d5521e86b800851::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
