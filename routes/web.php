<?php

Route::get('/', function() {
    return view('welcome', [
        'name' => 'Foo',
        'greeting' => '안녕하세요?',
    ]);
});

Route::get('/home', function() {
    return redirect(route('home'));
})


?>