<?php

namespace App\Services;

class MediaService
{
    public function saveFile($request, $folder): string
    {
        $file = $request;
        $originalName = $file->getClientOriginalName();
        $filename = uniqid().'_'.$originalName;
        $filepath = url("/storage/$folder/$filename");
        $file->storeAs(''.$folder.'', $filename, 'public');
        return $filepath;
    }

    public function saveFileToPublic($request, $folder): string
    {
        $file = $request;
        $filenameWithExt = $file->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $file->move(public_path($folder), $fileNameToStore);

        return url($folder.'/'.$fileNameToStore);
    }

    public function saveMultipleFiles($file, $folder): string
    {
        $originalName = $file->getClientOriginalName();
        $filename = uniqid().'_'.$originalName;
        $filepath = url("/storage/$folder/$filename");
        $file->storeAs(''.$folder.'', $filename, 'public');
        return $filepath;
    }
}