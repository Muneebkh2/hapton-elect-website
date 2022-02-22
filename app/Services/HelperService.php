<?php
namespace App\Services;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

Class HelperService{

    /**
     *  Upload file to storage
     */
    public static function uploadFile($file, $filebleId=null, $fileableType=null, $type = null, $path = null)
    {
        $path = Storage::disk('public')->put($path, $file);
        File::create([
            'path' => $path,
            'original_name' => $file->getClientOriginalName(),
            'name' => basename($path),
            'type' => $type,
            'fileable_id' => $filebleId,
            'fileable_type' => $fileableType,
        ]);
        return;
    }


    /**
     *  Upload multiple files to storage
     */
    public static function uploadFiles($files, $filebleId=null, $fileableType=null, $type = null, $path = null)
    {
       if(count($files)){
        foreach($files as $file){
            self::uploadFile($file, $filebleId, $fileableType, $type, $path);
        }
       }
        return;
    }
}
