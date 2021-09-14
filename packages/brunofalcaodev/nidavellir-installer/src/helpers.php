<?php

if (!function_exists('remove_diretory')) {
    function remove_diretory($path)
    {
        $files = glob($path . '/*');
        foreach ($files as $file) {
            is_dir($file) ? remove_diretory($file) : unlink($file);
        }
        rmdir($path);

        return;
    }
}
