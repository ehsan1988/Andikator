<?php

namespace App\Http\Controllers;

use Request;
use Storage;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('files.upload');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $destinationPath = config('app.fileDestinationPath') . '/' / $fileName;
            $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
            if ($uploaded) {

            }
        }
        return redirect()->to('/upload');
    }
}
