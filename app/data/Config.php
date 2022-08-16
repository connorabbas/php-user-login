<?php

namespace App\Data;

class Config
{
    protected $config = [];

    public function __construct(array $env)
    {
        $this->config = [
            'site' => [
                'environment' => $env['ENV'],
                'title' => 'Welcome!',
                'description' => 'Basic use auth system built with PHP.',
            ],
            'database' => [
                'main' => [
                    'driver' => $env['DB_DRIVER'],
                    'host' => $env['DB_HOST'],
                    'username' => $env['DB_USERNAME'],
                    'password' => $env['DB_PASSWORD'],
                    'name' => $env['DB_NAME'],
                    'pdo_persistent' => $env['DB_PDO_PERSISTENT'],
                ],
            ],
        ];
    }

    public function get()
    {
        return $this->config;
    }
}
