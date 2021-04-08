<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index($div_id)
    {
        return response(District::where('divishion_id', $div_id)->get());
    }

    public function getDistrict($district_id)
    {
        return response(District::where('id', $district_id)->get());
    }
}
