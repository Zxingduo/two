<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){

        config(['app.timezone' => 'America/Chicago']);
        $value = config('app.timezone');

        return $value;
    }
}
