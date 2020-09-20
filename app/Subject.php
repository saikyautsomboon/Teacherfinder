<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name','description','photo'
    ];
    
    public function subjectjoin($value='')
	{
	    return $this->hasMany('App\subjectjoin');
	}
	public function subject_teacher($value='')
    {
    	return $this->hasMany('App\Subject_Teacher');
    }
     public function user($value='')
    {
        return $this->belongsTo('App\User');
    }
    public function teachers($value='')
    {
        return $this->hasMany('App\Teacher');
    }
    
}
