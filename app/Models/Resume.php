<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $table = "resumes";

    protected $guarded = ["id"];

    public function sections()
    {
    	return $this->hasMany('App\Models\ResumeSection');
    }
}
