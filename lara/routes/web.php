<?php
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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
    return view('welcome');
});

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = student::where('student_id','LIKE','%'.$q.'%')->orWhere('batch','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('students.search')->withDetails($user)->withQuery ( $q );
    else return view ('students.search')->withMessage('No Details found. Try to search again !');
});
//Route::get('/search','studentcontroller@search');
Route::resource('students',studentcontroller::class);
