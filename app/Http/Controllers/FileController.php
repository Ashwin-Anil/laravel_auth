<?php

// FileUploadController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FileUpload;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,pdf|max:2048', // Adjust file types and size as needed
        ]);

        $file = $request->file('file');

        // Store the file in the storage/app/public directory
        $path = $file->store('public');

        // Save file details to the database
        $uploadedFile = new FileUpload([
            'filename' => $file->getClientOriginalName(),
            // Add other fields as needed
        ]);
        $uploadedFile->save();

        return 'File uploaded successfully!';
    }
}

