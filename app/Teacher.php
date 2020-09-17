<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'dob','user_id','subject_id','cv','porfolio','status'
    ];
    public function subject($value='')
    {
    	return $this->belongsTo('App\Subject');
    }
    public function user($value='')
	{
	    return $this->belongsTo('App\User');
	}
	public function subject_teacher($value='')
    {
    	return $this->hasMany('App\Subject_teacher');
    }
    public function subjectjoin($value='')
	{
	    return $this->hasMany('App\Subjectjoin');
	}
}
