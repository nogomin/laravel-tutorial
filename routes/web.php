<?php

//Route::get('/', 'WelcomeController@index');
Route::resource('articles', 'ArticlesController');

Route::get('/home', function() {
    return redirect(route('home'));
})


?>