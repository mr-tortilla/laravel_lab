<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'subject'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
