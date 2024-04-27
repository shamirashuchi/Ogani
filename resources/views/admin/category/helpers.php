<?php

function getFileUrl($file, $directory)
{
    $extension  = $file->getClientOriginalExtension();
    $fileName   = rand(10000, 500000).'.'.$extension;
    $file->move($directory, $fileName);
    $fileUrl    = $directory.$fileName;
    return $fileUrl;
}

function deleteFile($imageUrl)
{
    if (file_exists($imageUrl))
    {
        unlink($imageUrl);
    }
}
