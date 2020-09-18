<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjectjoin extends Model
{
    protected $fillable = [
        'subject_jd','teacher_id','user_id',
    ];
    public function teacher($value='')
    {
    	return $this->belongsTo('App\Teacher','teacher_id');
    }
    public function subject($value='')
    {
    	return $this->belongsTo('App\Subject','subject_jd');
    }
    public function user($value='')
    {
    	return $this->belongsTo('App\User');
    }
}
