<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_information extends Model
{
    use HasFactory;
    protected $table = 'user_informations';
    protected $fillable = [
        'name',
        'bio',
        'skill',
        'project',
        'address',
        'image',
    ];
}
