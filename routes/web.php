<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator; //add the validator
use App\Models\Course;
use App\Models\User;
use App\Models\Semester;

// Route::get('/courses', function () {
//     return view('courses');
// });

Route::get('/semester', function () {
    return view('semester');
});

Route::get('/notes', function () {
    return view('notes');
});

Route::get('/addNotes', function () {
    return view('addNotes');
});

Route::get('/enrol', function () {
    return view('enrol');
});



Route::get('/', function () {
    return view('welcome');
});


Route::get('/addModule', function () {
    return view('addModule');
});


//route to validate and save data into the database (addModule--courses)
Route::post('datasubmit',function(){
    $validate_data = Validator::make(request()->all(), [
        'code' => 'required|string|max:30',
        'title' => 'required|string|max:70',
        'credits' => 'required|numeric|max:4',
        'semester' => '',
        'year' => 'required|numeric|min:2000|max:2024',
        'duration' => '',
        'instructor' => 'string|max:50',
        'description' => 'string'
        
    ])->validated();

    Course::create([
        'code' => $validate_data['code'],
        'title' => $validate_data['title'],
        'credits' => $validate_data['credits'],
        'semester' => $validate_data['semester'],
        'year' => $validate_data['year'],
        'duration' => $validate_data['duration'],
        'instructor' => $validate_data['instructor'],
        'description' => $validate_data['description']
    ]);
    return redirect('/addModule')->with('success', 'Module added successfully!');
    
});


//route to validate and save data into the database (semester)
Route::post('datasend',function(){
    $validate_data = Validator::make(request()->all(), [
        'stitle' => 'required|string|max:30',
        'creditNo' => 'required|string|max:70',
        'modNo' => 'required|numeric|max:4',
        'year' => 'required|numeric|min:2000|max:2024',
        'duration' => '',
        'description' => 'string'
        
    ])->validated();

    Semester::create([
        'stitle' => $validate_data['stitle'],
        'creditNo' => $validate_data['creditNo'],
        'modNo' => $validate_data['modNo'],
        'year' => $validate_data['year'],
        'duration' => $validate_data['duration'],
        'description' => $validate_data['description']
    ]);
    return redirect('/semester')->with('success', 'Semester added successfully!');
    
});



Route::get('/courses', function () {
    $courses=DB::table('courses')->get();
    
    return view('courses', ['courses'=>$courses]);
 });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
