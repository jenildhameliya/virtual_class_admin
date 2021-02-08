<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    public function meeting()
    {
        return view('admin.meeting.meetingdetails');
    }
}
