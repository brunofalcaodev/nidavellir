<?php

if (! function_exists('array_to_string')) {
    function array_to_string($array)
    {
        $result = '';
        foreach ($array as $key => $value) {
            $result .= $key.':'.$value."\r\n";
        }

        return $result;
    }
}
