<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddExamComponent;

use App\Http\Livewire\Admin\AdminExamComponent;
use App\Http\Livewire\Admin\AdminEditExamComponent;
use App\Http\Livewire\Admin\AdminResultsStudentComponent;
use App\Http\Livewire\Admin\AdminMoreResultsStudentComponent;
use App\Http\Livewire\Admin\AdminUnitsComponent;
use App\Http\Livewire\Admin\AdminAddUnitComponent;
 
use App\Http\Livewire\Admin\AdminEditUnitComponent;
use App\Http\Livewire\Admin\AdminUnitUserComponent;
use App\Http\Livewire\Admin\AdminUsersComponent;


use App\Http\Livewire\User\Exam;
use App\Http\Livewire\User\ShowAllexam;


use App\Http\Livewire\User\Startexam;
use App\Http\Livewire\User\Result;



use App\Http\Livewire\Unitss;
use App\Http\Livewire\UnitDetail;
// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/',HomeComponent::class)->name('index');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('user/exam/{exam_id}',Exam::class)->name('user.exam');
    Route::get('user/ShowAllexam',ShowAllexam::class)->name('show_allexam.exam');

    Route::get('user/startexam',Startexam::class)->name('startuser.exam');

    Route::get('unit/{name}/{year_type}',UnitDetail::class)->name('unit.details');

    Route::get('user/result',Result::class)->name('result.exam');
    Route::get('/Units',Unitss::class)->name('Units');
});


Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    Route::get('admin/units',AdminUnitsComponent::class)->name('admin.units');
    Route::get('admin/unitpermituser/{email}',AdminUnitUserComponent::class)->name('admin.unit_user_admin');

    
    Route::get('admin/users/{year_type}',AdminUsersComponent::class)->name('admin.users');

    Route::get('admin/units/add',AdminAddUnitComponent::class)->name('admin.addunit');

    Route::get('admin/units/edit/{unit_id}',AdminEditUnitComponent::class)->name('admin.editunit');
    Route::get('admin/unit/{name}/{year_type}',UnitDetail::class)->name('admin.unit_details');

    Route::get('admin/unit/user/{id}',AdminResultsStudentComponent::class)->name('admin.unit_user');

    
    Route::get('admin/exams',AdminExamComponent::class)->name('admin.exams');

    Route::get('admin/Exam/add',AdminAddExamComponent::class)->name('admin.addexam');
    Route::get('admin/Exam/edit/{question_id}',AdminEditExamComponent::class)->name('admin.editexam');

    Route::get('admin/student_result/{year_type}',AdminResultsStudentComponent::class)->name('admin.result_student');

    Route::get('admin/student_result/{year_type}/{user_id}/{exam_id}',AdminMoreResultsStudentComponent::class)->name('admin.result_more_student');


});