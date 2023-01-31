<?php

if (!function_exists('active_menu')) {
    function active_menu($routeName = [], $option = null)
    {
        if (in_array(\Route::currentRouteName(), $routeName)) {
            return $option ?? 'active';
        }

        return '';
    }
}

if (!function_exists('show_menu')) {
    function show_menu($routeName = [], $option = null)
    {
        if (in_array(\Route::currentRouteName(), $routeName)) {
            return $option ?? 'show';
        }

        return '';
    }
}