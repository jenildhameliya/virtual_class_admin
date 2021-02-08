<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
     
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        // return view('users');
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
