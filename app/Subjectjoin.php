<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjectjoin extends Model
{
    protected $fillable = [
        'subject_id','teacher_id','user_id',
    ];
    public function teacher($value='')
    {
    	return $this->belongTo('App\Teacher');
    }
    public function subject($value='')
    {
    	return $this->hasMany('App\Subject');
    }
    public function user($value='')
    {
    	return $this->belongTo('App\User');
    }
}
