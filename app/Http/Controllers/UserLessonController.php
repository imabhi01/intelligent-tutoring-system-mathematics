<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLessonController extends Controller
{
    public function index(){
        return view('lessons.index');
    }

    public function circle(){
        return view('lessons.circle');
    }

    public function triangle(){
        return view('lessons.triangle');
    }
}
