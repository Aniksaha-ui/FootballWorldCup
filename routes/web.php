<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/dashboard', 'WelcomeController@dashboard');







Route::get('/showteamsplayers', 'teamController@showteamsplayers');

Route::post('/showteamsplayers', 'teamController@showteamsplayer');



Route::get('/reviews','HomeController@reviews');

//Route::get('/dashboard','HomeController@dashboard');

Route::get('/age','HomeController@age');


Route::get('/addstudent','studentController@create');

Route::get('/addplayer','HomeController@create');

Route::post('/addplayer','playerController@store');

Route::get('/showplayer','playerController@show');

Route::get('/editplayer{id}','playerController@editplayer');

Route::post('/editplayer','playerController@edit');

Route::get('/searchplayer','playerController@abc');

Route::post('/searchplayer','playerController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/playersinformationdetail','playerController@player_country');



Route::get('/showactiveplayer', 'PlayerController@showactiveplayer');



// Route::get('/showteamsplayer', 'PlayerController@showteamsplayer');




//team

Route::get('/addteam', 'HomeController@selectgroupforteam');

Route::post('/addteam', 'teamController@store');

// Route::get('/showteams', 'teamController@show');

Route::get('/argentina', 'playerController@argentina');

//goals

Route::get('/addgoal', 'HomeController@addgoal');


Route::post('/addgoal', 'goalController@store');

//stadium

Route::get('/addstadium', 'HomeController@addsta');

Route::post('/addstadium', 'staController@store');


//matches

Route::get('/addmatch', 'HomeController@teamcodeformatch');

// Route::get('/addmatch', 'HomeController@stacodeformatch');

Route::post('/addmatch', 'matchController@store');

Route::get('/showmatch', 'matchController@show');


//sqaurd

Route::get('/addsquard', 'HomeController@addsquard');

Route::post('/addsquard', 'squardController@store');

//group

Route::get('/addgroup', 'HomeController@teamforaddgroup');

Route::post('/addgroup', 'groupController@store');

//posts

Route::get('/addpost', 'HomeController@addpost');

Route::post('/addpost', 'postController@store');

Route::get('/showpost','postController@show');


Route::get('/writecomment{id}','postController@edit');







//pages



Route::get('/goalsinformation','PagesController@goal');

Route::get('/stadiuminformation','PagesController@stadium');

Route::get('/postsinformation','PagesController@post');

Route::get('/matchesinformation','PagesController@match');

Route::get('/groupsinformation','PagesController@group');

Route::get('/othersinformation','PagesController@other');

Route::get('/playersinformation','PagesController@player');




Route::get('/playersgoals','teamController@groupbyplayers');

Route::get('/fixture','matchController@show');


Route::get('/showteam','teamController@show');

Route::get('/showteaming','teamController@showteams');


Route::get('/news','postController@show');

Route::get('/admin','postController@admin');


