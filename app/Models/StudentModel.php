<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = ['fullName','gender','dob','phone','subjectId','active'];
    use HasFactory;
}
