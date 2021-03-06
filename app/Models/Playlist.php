<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'video_id'
    ];

    public function video()
    {
        return $this->belongsTo('App\Models\Video', 'video_id');
    }
}
