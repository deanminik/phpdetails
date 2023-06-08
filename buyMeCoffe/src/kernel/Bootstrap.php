<?php

namespace bootstrap\kernel;



use Symfony\Component\Dotenv\Dotenv;

final class Bootstrap
{
    private $routes;

    public function __construct() //start with properties and functions, located inside the constructor 
    {
        $dotenv = new Dotenv();
        $this->loadEnvironmentVariables($dotenv);
        echo $_ENV['SITE_NAME'];
    }

    private function initialize()
    {
    }

    private function loadEnvironmentVariables(Dotenv $dotenv): void
    {
        //void -> void keyword means it doesn't return anything, also you can let it empty, to indicate the same 
        // but is better to understand 

        $dotenv->load(__DIR__ . '/.env');
    }
}
