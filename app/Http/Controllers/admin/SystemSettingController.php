<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemSettingController extends Controller
{
    public function general()
    {
        return view('admin.system_setting.general');
    }

    public function notification()
    {
        return view('admin.system_setting.notification');
    }

    public function email()
    {
        return view('admin.system_setting.email');
    }

    public function language()
    {
        return view('admin.system_setting.language');
    }

    public function custom_fields()
    {
        return view('admin.system_setting.custom_fields');
    }

    public function system_fields()
    {
        return view('admin.system_setting.system_fields');
    }

}
