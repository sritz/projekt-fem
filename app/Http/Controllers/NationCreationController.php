<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NationCreationController extends Controller
{
    //Shows Nation Creation Page
    public function index()
    {
        return view(NationCreation);
    }
}
