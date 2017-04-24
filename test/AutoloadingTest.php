<?php

class AutoloadingTest extends PHPUnit_Framework_TestCase
{
    public function setup()
    {
        require_once(__DIR__ . "../register_autoloader.php");
    }

    public function testCanLoadClass()
    {
        $this->assertTrue(class_exists("\\Arbor\\Api\\Gateway\\RestGateway"));
    }
}
