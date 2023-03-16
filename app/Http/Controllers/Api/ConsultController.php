<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Consult;
use App\Models\User;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function getUserScheduleConsult($id)
    {
        $schedule_consult = User::find($id)->consult;

        return response()->json($schedule_consult);
    }
}
