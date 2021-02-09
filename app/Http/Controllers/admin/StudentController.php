<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.student_detail');
    }

    public function create()
    {
        return view('admin.student.student_create');
    }

    public function edit()
    {
        return view('admin.student.student_edit');
    }

    public function attendance()
    {
        return view('admin.student.student_attendance');
    }
}
