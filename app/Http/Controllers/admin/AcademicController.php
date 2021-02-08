<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcademicController extends Controller
{
    public function class_tt()
    {
        return view('admin.academic.class_timetable');
    }

    public function teacher_tt()
    {
        return view('admin.academic.teacher_timetable');
    }

    public function assign_teacher()
    {
        return view('admin.academic.assign_class_teacher');
    }

    public function subject()
    {
        return view('admin.academic.subject');
    }

    public function class()
    {
        return view('admin.academic.class');
    }

    public function class_create()
    {
        return view('admin.academic.class_create');
    }

    public function subject_group()
    {
        return view('admin.academic.subject_group');
    }
}
