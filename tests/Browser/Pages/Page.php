<?php

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;

abstract class Page extends BasePage
{
    /**
     * Assert that the browser is on the page.
     *
     * @param Browser $browser
     */
    function assert(Browser $browser)
    {
        // Ensure Google Analytics isn't enabled when the site is
        // not in production or when an user is authenticated.
        $browser->assertSourceMissing('gtag');
    }
}
