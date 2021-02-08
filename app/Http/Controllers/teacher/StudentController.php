<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        return view('teacher.student.student_detail');
    }

    public function create()
    {
        return view('teacher.student.student_create');
    }

    public function attendance()
    {
        return view('teacher.student.student_attendance');
    }
}
