<?php
use App\Http\Controllers\SubjectController;
use Illuminate\control\Http\Request;
use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */


                 /////Subject

Route::get('/', function () {
    return view('layouts.master');
});

Route::prefix('/subject')->group(function () {
    Route::get('/', [SubjectController::class, 'search']);
        Route::get('/add', function () {
        return view('subject.subject-add');
    });
    Route::post('/create', [SubjectController::class,'create'])->name("subject.create");
    Route::get('/edit/{id}', [SubjectController::class,'find']);
    Route::put('/update/{id}', [SubjectController::class,'update'])->name('subject.update');
    Route::get('/delete{id}', [SubjectController::class,'show']);
    Route::put('/delete/{id}', [SubjectController::class,'delete'])->name('subject.delete');
    });




                ////Student



Route::prefix('/student')->group(function () {
    Route::get('/', function () {
        return view('student.student-list');
    });
    Route::get('/add', function ($id) {
        return view('student.student-add');
    });
    


    Route::get('/edit/{id}', function ($id) {
        return view('student.student-edit');
    });
    Route::get('/delete/{id}', function ($id) {
        return view  ('student.student-delete');
     });
});
 

Route::get('/dashboard', function () {
    return view('dashboard.dashboard-list');
});


