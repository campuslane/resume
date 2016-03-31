<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeJob extends Model
{
    protected $table = "resume_jobs";

    protected $guarded = ["id"];

    public function section()
    {
    	return $this->belongsTo('App\Models\ResumeSection');
    }
}
