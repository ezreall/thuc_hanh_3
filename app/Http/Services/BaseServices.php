<?php


namespace App\Http\Services;


class BaseServices
{
    function updateLoadFile($request, $key, $nameFolder)
    {
        return $request->file($key)->store($nameFolder, 'public');
    }
}
