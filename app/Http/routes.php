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

Route::get('/', function () {

	$resume = Resume::with('sections', 'sections.jobs')->first();
   
    foreach($resume->sections as $section) {
    	echo '<h1>' . $section->title . '</h1>';
    	foreach($section->jobs as $job) {
    		echo '<p><strong>' . $job->company . ' | ' . $job->role . '</strong></p>';
    		echo '<p>' . $job->content . '</p>';
    	}
    }

});
