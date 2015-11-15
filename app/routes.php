<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*
Route::get('/', function()
{
	return View::make('hello');
});

*/
    Route::get('home','HomeController@showWelcome');

Route::post('tasks','ReportsController@add');
    Route::get('pr', function(){
        return date('D/M/Y');
    });

    Route::get('/',                  'AuthController@login');
    Route::post('login',             'AuthController@processLogin');
    Route::get('sign-up',            'AuthController@signUp');
    Route::post('sign-up',           'AuthController@processSignUp');

// Routes for User Profile
Route::group(['before' => 'auth'], function()
{
    Route::get('dashboard',         'AccountController@dashboard');
    Route::get('logout',            'AuthController@logout');
});

// Routes for User Profile
Route::group(['before' => 'auth'], function()
{
    Route::get('profile',                'ProfilesController@profile');
    Route::get('profile/edit',           'ProfilesController@profileEdit');
    Route::post('profile/account-info',  'ProfilesController@accountInfo');
    Route::post('profile/personal-info', 'ProfilesController@personalInfo');
    Route::post('profile/avatar-upload', 'ProfilesController@avatarUpload');
    Route::get('reports', 'ReportsController@index');
    Route::get('addReport', 'ReportsController@add');
    Route::post('create', 'ReportsController@create');
    Route::get('dates', 'ReportsController@dates');
    Route::get('reports/form', 'ReportsController@report');
    Route::put('update/{id}', 'ReportsController@update');
    Route::resource('reports', 'ReportsController');
    Route::post('aj',  'ReportsController@aj');
    Route::get('reports/form/fr',  'ReportsController@fr');

});
        

        /*Route::post('getLocation',  function(){
        
        if(Request::ajax())
        {
            if(Input::has('id'))
            {
                return Response::json("ghhho");
            }

        }   
     });
*/
Route::post('getLocation',  'LocationsController@get');

// Admin Routes
Route::group(['before' => 'auth|role:admin','prefix' => 'admin'], function()
{
    Route::group(['namespace' => 'Admin'], function()
    {
        Route::get('users',    'UsersController@users');
        Route::resource('roles',       'RolesController', ['except'=> ['show', 'create']]);
        Route::resource('permissions', 'PermissionsController', ['except'=> ['show', 'create']]);
        Route::resource('locations', 'LocationsController', ['except'=> ['show', 'create']]);

    });
});


