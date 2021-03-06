<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltCourse extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'course_code';
    protected $keyType = 'string';

    protected $fillable = [
        'course_id',
        'course_name',
        'course_class',
        'course_description',
        'sessions',
    ];

    public function sessions()
    {
        return $this->hasMany('App\Models\Session', 'course_code');
    }
}
