<?php

namespace App\Http\Controllers;

use App\Models\Romadan;
use Illuminate\Http\Request;

class RomadanController extends Controller
{
    public function index()
    {
        return response(Romadan::all());
    }
    public function getScheduleForDistricts($romadan_id, $district_id)
    {
        $romadan = Romadan::find($romadan_id);
        return response($romadan);
    }
    public function dateWiseIndex($day)
    {
        // dd($day);
        $romadan = Romadan::where('date', $day)->get();
        return $romadan;
    }
}
