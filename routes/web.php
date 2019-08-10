<?php

Route::get('/', [
    'as' => 'home',
    function() {
        return '제 이름은 "home" 입니다.';
    }
]);

Route::get('/home', function() {
    return redirect(route('home'));
})

?>