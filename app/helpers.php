<?php

if (! function_exists('adminRouteName')) {

    function adminRouteName(string $routeName = null): string
    {
        if (is_null($routeName)) {
            return '';
        }

        $name = array_slice(explode('.', $routeName), 1);
        $name = array_map(function ($element) {
            return ucfirst($element);
        }, $name);

        return implode(' ', $name);
    }
}
