<?php

use Illuminate\Support\Str;


if (!function_exists('slug')) {
    function slug(string $text)
    {
        return Str::slug($text);
    }
}
