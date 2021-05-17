<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class taskcontroller extends Controller
{
    //
    function list()
    {
    	return task::all();
    }
}
