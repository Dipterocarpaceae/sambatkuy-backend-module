<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Psycologist;
use Illuminate\Http\Request;

class PsycologistController extends Controller
{
    public function getPsycologists()
    {
        $psycologists = Psycologist::all();

        return response()->json($psycologists);
    }

    public function getDetailPsycologist($id)
    {
        $psycologist = Psycologist::find($id);

        return response()->json($psycologist);
    }
}
