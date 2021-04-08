<?php

namespace App\Http\Controllers;

use App\Models\Divishion;
use Illuminate\Http\Request;

class DivishionController extends Controller
{
    public function index()
    {
        return response(Divishion::all());
    }
}
