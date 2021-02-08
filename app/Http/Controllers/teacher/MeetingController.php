<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MeetingController extends Controller
{
    public function meeting()
    {
        return view('teacher.meeting.meetingdetails');
    }
}
