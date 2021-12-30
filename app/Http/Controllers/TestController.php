<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function homepage(){
        return view("layouts/app");
    }

    public function special(){
        return view("special");
    }

    public function developteam(){
        return view("developteam");
    }
}