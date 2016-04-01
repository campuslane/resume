<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "items";

    protected $guarded = ["id"];

    public function itemable()
    {
    	return $this->morphTo();
    }

}