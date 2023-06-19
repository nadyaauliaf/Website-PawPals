<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    use HasFactory;
    protected $table = 'sign_ups';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
