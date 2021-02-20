<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['studentSession']], function(){
    Route::match(['get','post'], 'account', 'StudentController@account');

    Route::match(['get','post'], '/student-biodata', 'StudentController@studentBiodata');
    Route::match(['get','post'], '/student-choose-course', 'StudentController@studentChooseCourse');
    Route::match(['get','post'], '/student-lecture-calendar', 'StudentController@studentLectureCalendar');
    Route::match(['get','post'], '/student-lecture-activity', 'StudentController@studentLectureActivity');
    Route::match(['get','post'], '/student-exam-marks', 'StudentController@studentExamMarks');
    Route::match(['get','post'], '/verify-password', 'StudentController@verifyPassword');
    Route::match(['get','post'], '/student-update-password', 'StudentController@changePassword');
    

});
Route::post('/student-login', 'StudentController@LoginStudent');

// forgot password route 
Route::get('/student-forgot-password', 'StudentController@getForgotPassword');
Route::post('/forgot-password', 'StudentController@forgotPassword');


Route::get('/student', 'StudentController@studentLogin');
Route::get('/logout', 'StudentController@studentLogout');


Auth::routes(['verify' => true]);


Route::group(['middleware' => 'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('classes', 'ClassesController');

Route::resource('roles', 'RoleController');

Route::resource('teachers', 'TeacherController');

Route::resource('admissions', 'AdmissionController');

Route::resource('classrooms', 'ClassroomController');

Route::resource('levels', 'LevelController');

Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendances', 'AttendanceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');
Route::post('/insert', ['as' =>'insert', 'uses' => 'ClassAssigningController@insert']);

Route::resource('transactions', 'TransactionController');

Route::resource('users', 'UserController');

Route::resource('semesters', 'SemesterController');

// dynamic level to course id

Route::get('/dynamicLevel', ['as' => 'dynamicLevel', 'uses' => 'ClassSchedulingController@DynamicLevel']);

Route::get('/class_schedules/edit', ['as' => 'edit', 'uses' => 'ClassSchedulingController@edit']);

// // update scheduling feacher

// Route::put('/classSchedulings/update', ['as' => 'update', 'uses' => 'ClassSchedulingController@update']);


Route::resource('departments', 'DepartmentController');
});

// multiple language route
Route::get('locale{locale}', 'StudentController@languages');
Route::get('/pdf-download-class-assign', 'ClassAssigningController@PDFgenerator');
Route::get('/pdf-download-class-schedule', 'ClassSchedulingController@PDFgenerator');
Route::get('/pdf-download-teachers', 'TeacherController@PDFgenerator');





Route::get('/excel-export-teachers_xlsx', 'TeacherController@ExportExcel_xlsx');
Route::get('/excel-export-teachers_xls', 'TeacherController@ExportExcel_xls');
Route::get('/excel-export-teachers_csv', 'TeacherController@ExportExcel_csv');


Route::post('/excel-import-teachers', 'TeacherController@ImportExcel');

Route::get('prints-teachers/{id}', 'TeacherController@PrintTeacher');
Route::get('pdf-download-teacher-single/{id}', 'TeacherController@PDFTeacher_Single');
Route::get('/teacher-status-updated', 'TeacherController@UpdateTeacherStatus');



Route::resource('feeStructures', 'FeeStructuresController');