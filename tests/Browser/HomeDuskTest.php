<?php

use Laravel\Dusk\Browser;

class ExampleDuskTest extends DuskTestCase
{
    /** @test */
    function it_works()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new HomePage())
                ->assertSee('Welcome Home!');
        });
    }
}
