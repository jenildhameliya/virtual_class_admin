<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HumanResourceController extends Controller
{
    public function staff_detail()
    {
        return view('admin.human_resource.staff_detail');
    }

    public function staff_create()
    {
        return view('admin.human_resource.staff_create');
    }

    public function staff_edit()
    {
        return view('admin.human_resource.staff_edit');
    }
}
