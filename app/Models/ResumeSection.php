<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResumeSection extends Model
{
    protected $table = "resume_sections";

    protected $guarded = ["id"];

    public function resume()
    {
    	return $this->belongsTo('App\Models\Resume');
    }

    public function jobs()
    {
    	return $this->hasMany('App\Models\ResumeJob');
    }
}
