<?php

// namespace App\Helpers;

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
| Helpers Custom Class
|--------------------------------------------------------------------------
|
| Providee utility methods for use in Blade Templates.
|
*/
// class Helper
// {
//     public static function uppercase(string $string)
//     {
//         return strtoupper($string);
//     }
//
//     public static function toName(srting $str)
//     {
//         return Str::title( Str::camel( $post->name ) );
//     }
// }

// function toName($str)
// {
//     return Str::title( Str::camel( $post->name ) );
// }
