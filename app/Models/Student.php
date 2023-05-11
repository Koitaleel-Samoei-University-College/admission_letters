<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
    'indexNumber',
    'admissionNumber',
    'name',
    'other_names',
    'gender',
    'phone',
    'email',
    'address',
    'county',
    'program',
    'school'
];}
