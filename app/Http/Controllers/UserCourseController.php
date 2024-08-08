<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Category;

class UserCourseController extends Controller
{
    public function index(){
        $courses = Course::paginate(10);
        return view('admins.courses.list_courses', compact('courses'));
    }

    public function createCourse(){
        $levels = Level::LEVELS;
        $categories = Category::CATEGORY;
        return view('admins.courses.create_course', compact('levels', 'categories'));
    }

    public function storeCourse(Request $request){
        dd($request->all());
    }
}
