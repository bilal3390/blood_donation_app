<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = ['f_name','l_name','age','email','contact','blood_group','gender','address'];

}
