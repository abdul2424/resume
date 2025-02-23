<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitersController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ZoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\DB; // Import DB facade

Route::get('/', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }

    // Pass total_jobs and FRONT_USER_LOGIN session data to the view
    return view('index', compact('total_jobs','users'));
});
Route::get('/hello', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }

    // Pass total_jobs and FRONT_USER_LOGIN session data to the view
    return view('frontend.content', compact('total_jobs','users'));
});
Route::view('/contact', 'frontend.contact')->name('frontend.contact');
Route::post('/contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('/otp/{id}',[RecruitersController::class,'sendOtp'])->name('otp.send');


Route::get('/organization', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }
    return view('org', compact('total_jobs','users'));
});

Route::get('/candidate', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }
    return view('candidate', compact('total_jobs','users'));

});
Route::post('/store-meeting', [RecruitersController::class, 'storeMeeting'])->name('store.meeting');
Route::get('/notify_organization/{orgId}',[RecruitersController::class,'notify_organization']);
Route::post('/user_cand_profile_edit',[RecruitersController::class,'user_cand_profile_edit']);
Route::post('/user_cand_qualification',[RecruitersController::class,'user_cand_qualification']);
Route::post('/user_cand_skill_edit',[RecruitersController::class,'user_cand_skill_edit']);
Route::post('/user_cand_experience_edit',[RecruitersController::class,'user_cand_experience_edit']);

Route::get('/profile_for_cand/{id}',[RecruitersController::class,'profile_for_cand']);
Route::get('/get_candidate',[RecruitersController::class,'get_candidate']);
Route::post('/candidate_reg',[RecruitersController::class,'candidate_reg']);
Route::post('/candidate_certificate',[RecruitersController::class,'candidate_certificate']);
Route::post('/candidate_experience',[RecruitersController::class,'candidate_experience']);
Route::post('/candidate_skill',[RecruitersController::class,'candidate_skill']);

Route::get('start', [ZoomController::class, 'index']);
Route::any('zoom-meeting-create', [ZoomController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/about', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }

    // Pass total_jobs and FRONT_USER_LOGIN session data to the view
    return view('about', compact('total_jobs','users'));
});

Route::get('/customer', function (Illuminate\Http\Request $req) {
    $total_jobs = 0; // Default value
    $users=null;

    // Check if user is logged in
    if ($req->session()->has('FRONT_USER_ID')) {
        $uid = $req->session()->get('FRONT_USER_ID');
        $total_jobs = DB::table('employer')
              ->where('uid', $uid)
              ->count();
        $users = DB::table('users')
              ->where('id', $uid)
              ->first();
    }

    // Pass total_jobs and FRONT_USER_LOGIN session data to the view
    return view('customer', compact('total_jobs','users'));
});

Route::get('/signup', function () {
    return view('register');
});
Route::get('/logout',function(){
    session()->forget('FRONT_USER_LOGIN');
    session()->forget('FRONT_USER_ID');
    session()->forget('FRONT_USER_NAME');
    session()->flash('error','Logout Successfully');
    return redirect('/');
});

Route::post('/user_login',[RecruitersController::class,'user_login']);
// Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/', [HomeController::class, 'index']);
Route::post('/user_register',[RecruitersController::class,'user_register']);
Route::post('/user_org',[RecruitersController::class,'user_org']);
Route::get('/profile',[RecruitersController::class,'profile']);
Route::get('/plan',[RecruitersController::class,'plan']);
Route::get('/cand_profile',[RecruitersController::class,'cand_profile']);
Route::get('/personal_edit',[RecruitersController::class,'personal_edit']);

Route::get('/qualification_edit',[RecruitersController::class,'qualification_edit']);
Route::get('/skill_edit',[RecruitersController::class,'skill_edit']);
Route::get('/experience_edit',[RecruitersController::class,'experience_edit']);

Route::get('/stripe/{plan_id}',[StripePaymentController::class,'stripe']);
Route::post('/user_stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
