<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeritList extends Model
{
    use HasFactory;

    protected $table ="merit_lists";
    protected $fillable = [
        "user_id",
        "admission_id",
        "total_marks",
        "obtained_marks",
        "percentage"
    ];
}
