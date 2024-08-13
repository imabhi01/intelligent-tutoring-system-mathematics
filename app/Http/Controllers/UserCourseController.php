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
        $courses = Course::latest()->paginate(10);
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

        if ($request->hasFile('featured_image')) {
            $originName = $request->file('featured_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('featured_image')->move(public_path('featuredImages'), $fileName);
        }

        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'level' => $request->level,
            'category' => $request->category,
            'content' => $request->content,
            'featured_image' => $fileName,
            'status' => $request->status
        ]);

        session()->flash('success', 'Course saved successfully!');
        return redirect()->route('addCourse');
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

        if ($request->hasFile('featured_image')) {
            $originName = $request->file('featured_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('featured_image')->move(public_path('featuredImages'), $fileName);
            $record->featured_image = $fileName;
        }

        $record->title = $request->title;
        $record->description = $request->description;
        $record->level = $request->level;
        $record->category = $request->category;
        $record->content = $request->content;
        $record->status = $request->status;
        $record->save();

        session()->flash('success', 'Course saved successfully!');
        return redirect()->route('addCourse');
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
