<?php
use Illuminate\Support\Carbon;

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

// Route::get('/', function () {
//     return view('welcome');
// });
$dayOfWeek = [
    0 => 'sunday',
    1 => 'monday',
    2 => 'tuesday',
    3 => 'wednesday',
    4 => 'thursday',
    5 => 'friday',
    6 => 'saturday',
];
$day = Carbon::now()->dayOfWeek;

$date = $dayOfWeek[$day];

Route::group(['prefix' => $date],function(){
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/update', 'HomeController@updateData')->name('data.update');

});

Route::get('/home', 'HomeController@home');

Route::resource('/', 'AdminController');
