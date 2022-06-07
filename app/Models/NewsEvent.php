<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    use HasFactory;

    protected $table = "news_and_events";

    protected $fillable = [
        "title",
        "description",
        "type",
        "image_url",
        "publication_status"
    ];
}
