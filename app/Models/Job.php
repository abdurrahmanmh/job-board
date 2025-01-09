<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    //php 7.4+
    public static array $experiences = ['entry', 'intermediate', 'senior'];
    public static array $categories = ['IT', 'Finance', 'Marketing', 'Sales'];
}
