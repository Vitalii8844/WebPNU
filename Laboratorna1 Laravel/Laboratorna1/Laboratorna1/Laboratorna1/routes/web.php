<?php
use App\Http\Controllers\WelcomeController;
Route::get('welcome/{name}/{familyname}', [WelcomeController::class, 'name']);

