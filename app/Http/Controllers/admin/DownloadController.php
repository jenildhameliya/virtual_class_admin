<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DownloadController extends Controller
{
    public function doc_download()
    {
        return view('admin.download.download_details');
    }
}
