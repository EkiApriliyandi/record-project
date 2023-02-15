<?php

use App\Http\Controllers\HomeController;
use illuminate\support\Facades\route;

Route::get('/',[HomeController::class, "index"]);