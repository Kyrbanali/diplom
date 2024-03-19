<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    //
    public function index()
    {
        //who is here?
        Auth::user();//сервер аутентификации

        $schedule = Schedule::all();
        return view('schedule.schedule', compact('schedule'));
    }
}
