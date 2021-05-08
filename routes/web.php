<?php

use Illuminate\Support\Facades\Route;

Route::any('/{any}', fn() => view('default'))->where('any', '.*');
