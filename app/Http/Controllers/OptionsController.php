<?php

namespace App\Http\Controllers;

use App\Models\Options;
use Illuminate\Http\Request;

class OptionsController extends Controller
{
    //
    public function index(){
        //fetch from the db:
        return response()->json(Options::all());
    }
}
