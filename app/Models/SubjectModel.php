<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{
    protected $table = 'subjects';
    protected $primarykey = 'id';
    protected $fillable = ['code','name','note','active'];

    use HasFactory;
}
