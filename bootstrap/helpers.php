<?php

function getImageDimensions($imagePath)
{
    $fullPath = public_path($imagePath);
    list($width, $height) = getimagesize($fullPath);

    return [
        'width' => $width,
        'height' => $height
    ];
}
