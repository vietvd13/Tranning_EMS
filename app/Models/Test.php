<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        "course_id",
        "test_name",
        "class_id",	
        "who_created"
    ];

    public function question() {
        return $this->belongsToMany('App\Models\Question','test_question','test_id','question_id');
    }
}