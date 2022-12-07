<?php

namespace App\Base\Service;

use App\Base\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

class ImageService extends Controller
{
    public function execute(UploadedFile $uploadFile): string
    {
        $file = $uploadFile;
        $filename = '1.' . $file->getClientOriginalExtension();
        $file->move(public_path('public/Image'), $filename);

        return $filename;
    }

}
