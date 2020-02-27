<?php

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


/**
 * Auth routes
 */
Route::group(['namespace' => 'Auth'], function () {

    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    if (config('auth.users.registration')) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

    // Confirmation Routes...
    if (config('auth.users.confirm_email')) {
        Route::get('confirm/{user_by_code}', 'ConfirmController@confirm')->name('confirm');
        Route::get('confirm/resend/{user_by_email}', 'ConfirmController@sendEmail')->name('confirm.send');
    }

    // Social Authentication Routes...
    Route::get('social/redirect/{provider}', 'SocialLoginController@redirect')->name('social.redirect');
    Route::get('social/login/{provider}', 'SocialLoginController@login')->name('social.login');
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');


    //Users
    Route::get('users', 'UserController@index')->name('users');
    Route::get('users/create','UserController@create')->name('users.create');
    Route::post('users/create','UserController@store')->name('users.store');
    Route::get('users/restore', 'UserController@restore')->name('users.restore');
    Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');


    //Modules
    Route::get('modules', 'ModuleController@index')->name('modules.index');
    Route::get('modules/create','ModuleController@create')->name('modules.create');
    Route::post('modules/create','ModuleController@store')->name('modules.store');
    Route::get('modules/{module}/edit', 'ModuleController@edit')->name('modules.edit');
    Route::put('modules/{module}', 'ModuleController@update')->name('modules.update');
    Route::any('modules/{id}/destroy', 'ModuleController@destroy')->name('modules.destroy');

    //Patients
    Route::get('patients', 'PatientController@index')->name('patients.index');
    Route::get('patients/create','PatientController@create')->name('patients.create');
    Route::post('patients/create','PatientController@store')->name('patients.store');
    Route::get('patients/{id}', 'PatientController@show')->name('patients.show');
    Route::get('patients/{patient}/edit', 'PatientController@edit')->name('patients.edit');
    Route::put('patients/{patient}', 'PatientController@update')->name('patients.update');
    Route::any('patients/{id}/destroy', 'PatientController@destroy')->name('patients.destroy');
    //Patient User Autocomplete
    Route::get('user-autocomplete-ajax', 'PatientController@dataAjax');

    //Approvals
    Route::get('approvals', 'ApprovalController@index')->name('approvals.index');
    Route::get('approvals/create','ApprovalController@create')->name('approvals.create');
    Route::post('approvals/create','ApprovalController@store')->name('approvals.store');
    Route::get('approvals/{id}', 'ApprovalController@show')->name('approvals.show');
    Route::get('approvals/{approval}/edit', 'ApprovalController@edit')->name('approvals.edit');
    Route::put('approvals/{approval}', 'ApprovalController@update')->name('approvals.update');
    Route::any('approvals/{id}/destroy', 'ApprovalController@destroy')->name('approvals.destroy');

    Route::get('permissions', 'PermissionController@index')->name('permissions');
    Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
    Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart');
    Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart');


    Route::put('approval', 'ApprovalController@approvalStatus')->name('approval.update');

    

});


Route::get('/', 'HomeController@index');

/**
 * Membership
 */
Route::group(['as' => 'protection.'], function () {
    Route::get('membership', 'MembershipController@index')->name('membership')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('membership/access-denied', 'MembershipController@failed')->name('membership.failed');
    Route::get('membership/clear-cache/', 'MembershipController@clearValidationCache')->name('membership.clear_validation_cache');
});
