<?php
// app/FileUpload.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected $table = 'file_uploads';

    protected $fillable = [
        'filename',
        // Add other fields as needed
    ];
}
