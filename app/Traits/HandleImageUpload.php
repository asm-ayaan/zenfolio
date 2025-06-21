<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

trait HandleImageUpload
{
    public function uploadImage(UploadedFile $image, ?string $oldPath = null, string $folder = '/uploads'): ?string
    {
        $filename = Str::uuid() . '.' . $image->getClientOriginalExtension();
        $path = public_path($folder);

        $image->move($path, $filename);

        if (File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }

        return $folder . '/' . $filename;
    }
}
