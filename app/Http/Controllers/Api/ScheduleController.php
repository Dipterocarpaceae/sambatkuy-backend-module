<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Psycologist;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getPsycologistSchedule($id)
    {
        $schedules = Psycologist::find($id)->schedule;

        return response()->json($schedules);
    }
}
