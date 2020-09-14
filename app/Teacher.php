<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name','dob','user_id','experience','status',
    ];
    public function subject($value='')
    {
    	return $this->hasMany('App\Subject');
    }
    public function user($value='')
	{
	    return $this->belongTo('App\User');
	}
	public function subject_teacher($value='')
    {
    	return $this->hasMany('App\subject_teacher');
    }
    public function subjectjoin($value='')
	{
	    return $this->hasMany('App\subjectjoin');
	}
}
