<?php

class HomePage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    function url()
    {
        return route('home');
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    function elements()
    {
        return [
            //
        ];
    }
}
