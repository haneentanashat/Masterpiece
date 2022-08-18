<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistersController;
use Illuminate\Support\Facades\Route;

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
/**********************  register routs ************************ */
Route::resource('register', RegistersController::class);
// Route::resource('client', RegistersController::class);
Route::post('login', [LoginController::class, 'checklogin']);
route:: view('ulogin','users.login');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/livingSingle', function () {
    return view('livingSingle');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/feature', function () {
    return view('feature');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/404', function () {
    return view('404');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/register', function () {
//     return view('users.register');
// });

Route::get('/living', function () {
    return view('living');
});
Route::get('/bedroom', function () {
    return view('bedroom');
});
Route::get('/dash', function () {
    return view('dashboard.index');
});
Route::get('/signup', function () {
    return view('dashboard.signup');
});
Route::get('/signin', function () {
    return view('dashboard.signin');
});
Route::get('/table', function () {
    return view('dashboard.table');
});
Route::get('/form', function () {
    return view('dashboard.form');
});
Route::get('404', function () {
    return view('dashboard.404');
});