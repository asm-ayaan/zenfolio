<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait HandleImageUpload {
    public function uploadImage(UploadedFile $image, string $folder = '/uploads') : ?string {
       $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
       $path = public_path($folder);

       $image->move($path, $filename);

       return $folder . '/' . $filename;
    }
}