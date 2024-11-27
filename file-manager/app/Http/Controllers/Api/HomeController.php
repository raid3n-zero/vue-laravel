<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\File;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDataHome()
    {
   
        $folders = Folder::query()->get();
        $files = File::query()->orderBy('id', 'desc')->get();

        return [
            'folders' => $folders,
            'file' => $files
        ];
        
    }
}
