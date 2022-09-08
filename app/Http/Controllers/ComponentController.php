<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index(){
        Session::put('componentSession', 'componenetSession');
    }
}
