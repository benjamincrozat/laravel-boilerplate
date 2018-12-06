<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\Password;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     */
    public static $model = \App\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     */
    public static $search = [
        'id',
        'name',
        'email',
    ];

    /**
     * Get the fields displayed by the resource.
     */
    function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Gravatar::make(),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:6')
                ->updateRules('nullable', 'string', 'min:6'),
        ];
    }

    /**
     * Get the cards available for the request.
     */
    function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    function actions(Request $request)
    {
        return [];
    }
}
