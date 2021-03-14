<?php
declare(strict_types=1);

final class Application
{
    private string $greeting;

    public function __construct()
    {
        $this->greeting = 'Hello world in Docker.';
    }

    public function run(): void
    {
        echo $this->greeting;
    }
}

(new application())->run();