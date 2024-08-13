<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Category;
use Validator;

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

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'category' => $request->category,
            'content' => $request->content,
            'status' => $request->status
        ]);

        session()->flash('success', 'Course saved successfully!');
        return redirect()->back();
    }

    public function editCourse($id){
        $levels = Level::LEVELS;
        $categories = Category::CATEGORY;
        $course = Course::find($id);
        return view('admins.courses.edit_course', compact('levels', 'categories', 'course'));
    }

    public function updateCourse($id, Request $request){

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'level' => 'required',
            'category' => 'required',
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $record = Course::findOrFail($id);

        if(!$record){
            abort(404);
        }

        $record->update([
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'category' => $request->category,
            'content' => $request->content,
            'status' => $request->status
        ]);

        session()->flash('success', 'Section saved successfully!');
        return redirect()->route('listCourse');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back()->withSuccess('Course: ' . $course->title . ' deleted successfully');
    }

    public function listCourses($level){
        $courses = Course::latest()->where(['level' => $level])->get();
        return view('admins.courses.course_listing', compact('courses', 'level'));
    }

    public function courseDetail($courseId, $level, $category){
        $course = Course::find($courseId);
        $latestCourses = Course::latest()
            ->where('id', '!=', $course->id)
            ->where(['level' => $level, 'category' => $category])
            ->take(2)->get();
        return view('admins.courses.course_detail', compact('course', 'latestCourses'));
    }
}
