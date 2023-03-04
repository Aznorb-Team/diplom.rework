<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\IndexViewController')->name('index');

Route::group(['middleware'=>'guest'], function(){
    //Метод отображения раздела регистрации
    Route::get('/sign_up', 'App\Http\Controllers\Auth\ViewSignUpController')->name('sign_up');
    Route::post('/sign_up.store', 'App\Http\Controllers\Auth\StoreSignUpController')->name('sign_up.store');
    //Метод отображения раздела авторизации
    Route::get('/log_in', 'App\Http\Controllers\Auth\ViewLoginController')->name('log_in');
    Route::post('/log_in.store', 'App\Http\Controllers\Auth\StoreLoginController')->name('log_in.store');
});
Route::group(['middleware'=>'auth'], function(){
    Route::group(['middleware'=>'admin', 'prefix'=>'admin'], function(){
        Route::get('/', 'App\Http\Controllers\Admin\IndexController')->name('admin');
        Route::get('/user.list', 'App\Http\Controllers\Admin\UserListController')->name('user.list');
        Route::post('/save.user_list', 'App\Http\Controllers\Admin\SaveUserListController')->name('save.user_list');
        Route::get('/role.list', 'App\Http\Controllers\Admin\RoleListController')->name('role.list');
        Route::get('/direction.list', 'App\Http\Controllers\Admin\DirectionListController')->name('direction.list');
    });
    
    Route::group(['middleware'=>'user', 'prefix'=>'user'], function(){
        Route::get('/', 'App\Http\Controllers\User\IndexController')->name('user');
        Route::get('/profile', 'App\Http\Controllers\User\ViewProfileController')->name('profile');
        Route::get('/application.list', 'App\Http\Controllers\User\ApplicationListController')->name('application.list');
        Route::get('/form_add_application', 'App\Http\Controllers\User\ViewFormAddApplicationController')->name('form_add_application');
        Route::post('/add_application', 'App\Http\Controllers\User\AddApplicationController')->name('add_application');

        //antiplagiat
        Route::get('/antiplagiat.application_list', 'App\Http\Controllers\Employee\ApplicationListController')->name('antiplagiat.application_list');

        Route::get('/antiplagiat.check/{id}', 'App\Http\Controllers\Employee\Antiplagiat\CheckAntiplagiatController')->name('antiplagiat.check');
        Route::post('/antiplagiat.success/{id}', 'App\Http\Controllers\Employee\Antiplagiat\SuccessController')->name('antiplagiat.success');
        Route::get('/antiplagiat.unsuccess/{id}', 'App\Http\Controllers\Employee\Antiplagiat\UnSuccessController')->name('antiplagiat.unsuccess');

        //ris
        Route::get('/expert_ris.check/{id}', 'App\Http\Controllers\Employee\Expert_Ris\CheckRisController')->name('expert_ris.check');
    });

    Route::get('/logout', 'App\Http\Controllers\Auth\LogOutController')->name('logout');
});


