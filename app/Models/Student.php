<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable = [
        "user_id",
        "father_name",
        "date_of_birth",
        "cnic_no",
        "parmanent_address",
        "madrassah_total_marks",
        "madrassah_obtained_marks",
        "madrassah_percentage",
        "madrassah_name",
        "madrassah_board",
    ];
}
