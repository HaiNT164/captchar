<?php

$font_path='./fonts';

function collect_files($dir, $ext) {
    if (($dir = opendir($dir))) 
    {
        $files = array();
        while ($file = readdir($dir))
            if (preg_match("/\\.$ext\$/i", $file)) 
                $files[] = $file;
        return $files;
    }

    return false;
}

$fonts = collect_files($font_path, "ttf");

echo "<pre>";

print_r($fonts);