<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\SectionsController;
use App\Http\Controllers\QuestionsController;
// use App\Http\Controllers\UserLessonController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\UploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
    // return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->group(function () {

    //Route::resource('users', ManageUserController::class);

    Route::get('/users', [ManageUserController::class, 'index'])->name('usersIndex');

    Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhome');

    Route::get('/globalQuizzes', [AdminController::class, 'globalQuizzes'])->name('globalQuizzes');

    Route::get('/createSection', [SectionsController::class, 'createSection'])
        ->name('createSection');

    Route::post('/deleteSection/{id}', [SectionsController::class, 'deleteSection'])
        ->name('deleteSection');

    Route::post('/storeSection/section', [SectionsController::class, 'storeSection'])
        ->name('storeSection');

    Route::get('/editSection/{section}', [SectionsController::class, 'editSection'])
        ->name('editSection');

    Route::post('/updateSection/{section}', [SectionsController::class, 'updateSection'])
        ->name('updateSection');

    Route::get('/listSection', [SectionsController::class, 'listSection'])
        ->name('listSection');

    Route::get('/detailSection/{section}', [SectionsController::class, 'detailSection'])
        ->name('detailSection');

    Route::get('/createQuestion/{section}', [QuestionsController::class, 'createQuestion'])
        ->name('createQuestion');

    Route::get('/detailQuestion/{question}', [QuestionsController::class, 'detailQuestion'])
        ->name('detailQuestion');

    Route::post('/storeQuestion/{section}', [QuestionsController::class, 'storeQuestion'])
        ->name('storeQuestion');
    Route::post('/deleteQuestion/{id}', [QuestionsController::class, 'deleteQuestion'])
        ->name('deleteQuestion');
});

Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('courses')->group(function () {

    Route::get('/', [UserCourseController::class, 'index'])
    ->name('listCourse');

    Route::get('/createCourse', [UserCourseController::class, 'createCourse'])
    ->name('createCourse');

    Route::post('/storeCourse/section', [UserCourseController::class, 'storeCourse'])
    ->name('storeCourse');

    Route::get('/editCourse/{id}', [UserCourseController::class, 'editCourse'])
    ->name('editCourse');

    Route::post('/updateCourse/{id}', [UserCourseController::class, 'updateCourse'])
    ->name('updateCourse');

    Route::post('/deleteCourse/{id}', [UserCourseController::class, 'deleteCourse'])
    ->name('deleteCourse');

});

Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('appuser')->group(function () {

    Route::get('/userQuizHome', [AppUserController::class, 'userQuizHome'])
        ->name('userQuizHome');

    Route::get('/userQuizDetails/{id}', [AppUserController::class, 'userQuizDetails'])
        ->name('userQuizDetails');

    Route::post('/deleteUserQuiz/{id}', [AppUserController::class, 'deleteUserQuiz'])
        ->name('deleteUserQuiz');

    Route::get('/startQuiz', [AppUserController::class, 'startQuiz'])
        ->name('startQuiz');
});

Route::post('upload', [UploadController::class, 'upload'])->name('upload');

// Route::middleware(['auth', 'verified', 'role:admin|user'])->prefix('lessons')->group(function () {
//     Route::get('/', [UserLessonController::class, 'index'])
//     ->name('lessons');

//     Route::get('/circle', [UserLessonController::class, 'circle'])
//     ->name('circle');

//     Route::get('/triangle', [UserLessonController::class, 'triangle'])
//     ->name('triangle');

//     Route::get('/rectangle', [UserLessonController::class, 'rectangle'])
//     ->name('rectangle');

//     Route::get('/square', [UserLessonController::class, 'square'])
//     ->name('square');
// });



