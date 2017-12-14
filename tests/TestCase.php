<?php

namespace App\Tests;

use LumenPress\Testing\WordPressTrait;

abstract class TestCase extends \Laravel\Lumen\Testing\TestCase
{
    use WordPressTrait;

    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        $this->setPermalinkStructure('/%postname%/');
        return require __DIR__.'/../bootstrap/app.php';
    }
}
