<?php
Route::prefix('program')->group(function () {
    Route::get('/test', function () {
        return 'Hello World';
    });

});
