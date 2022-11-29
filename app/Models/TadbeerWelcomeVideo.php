<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TadbeerWelcomeVideo extends Model
{
    use HasFactory;

    protected $table = 'tadbeer_welcome_videos';

    protected $fillable = [
        'title',
        'short_introduction',
        'video_url',
        'image_url',
    ];
}
