<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function index()
    {
        $schedule = Schedule::all();
        return view('schedule.schedule', compact('schedule'));
    }
}
