<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = ["firstname","middlename","lastname","username","email","address","password","contact","birthday"];
}
