<?php

use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Detect Active Route
|--------------------------------------------------------------------------
|
| Compare given route with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
function isActiveRoute($route, $output = "active")
{
    if (Route::currentRouteName() == $route) return $output;
}

/*
|--------------------------------------------------------------------------
| Detect Active Routes
|--------------------------------------------------------------------------
|
| Compare given routes with current route and return output if they match.
| Very useful for navigation, marking if the link is active.
|
*/
// function areActiveRoutes(Array $routes, $output = "active")
// {
//     foreach ($routes as $route)
//     {
//         if (Route::currentRouteName() == $route) return $output;
//     }
//
// }

/*
|--------------------------------------------------------------------------
| Name/Title String Helper
|--------------------------------------------------------------------------
|
| Providee utility to capitalize and camel-case a string to be a title
| or name.
|
*/
function toName(string $str)
{
    return strtoupper($str);
    // return Str::title( Str::camel( $post->name ) );
}
