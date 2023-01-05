<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'photo', 'address', 'email', 'phone', 'date_of_birth', 'nationality', 'linkedin_profile'];
}