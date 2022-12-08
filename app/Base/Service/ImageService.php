<?php

namespace App\Base\Service;

use App\Base\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

class ImageService extends Controller
{
    public function execute(UploadedFile $uploadFile, string $path): string
    {
        $file = $uploadFile;
        $filename = '1.' . $file->getClientOriginalExtension();
        $file->move(public_path('public/image/' . $path), $filename);

        return $filename;
    }

}
