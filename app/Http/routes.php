<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Resume;
use App\Models\Item;

Route::get('bullet', function(){
	return view('resumes.bullet');
});

Route::get('/', function () {

	$item = Item::with('itemable')->first();

	dd($item);

	$resume = Resume::with('sections', 'sections.jobs')->first();
   
    return view('resumes.resume', compact('resume'));

});
