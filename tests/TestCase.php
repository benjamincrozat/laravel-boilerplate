<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    use CreatesApplication, RefreshDatabase;

    /**
     * This method is called before each test.
     */
    function setUp()
    {
        parent::setUp();

        Cache::flush();
    }
}
