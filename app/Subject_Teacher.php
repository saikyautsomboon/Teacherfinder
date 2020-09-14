<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_Teacher extends Model
{
    protected $fillable = [
        'subject_id','teacher_id','description','price','pdf','video',
    ];
    public function teacher($value='')
    {
    	return $this->belongTo('App\Teacher');
    }
    public function subject($value='')
    {
    	return $this->belongTo('App\Subject');
    }
    

}
