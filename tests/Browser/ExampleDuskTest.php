<?php

use Laravel\Dusk\Browser;

class ExampleDuskTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @throws Throwable
     */
    function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new HomePage());
        });
    }
}
