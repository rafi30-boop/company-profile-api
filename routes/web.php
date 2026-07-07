<?php

use Illuminate\Support\Facades\Route;

Route::any('/hybridaction/zybTrackerStatisticsAction', function () {
    return response()->noContent();
});

Route::get('/', function () {
    return view('welcome');
});
