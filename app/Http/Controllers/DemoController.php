<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DemoController extends Controller
{
    public function index()
    {
        return encrypt(111111);


    }
}
