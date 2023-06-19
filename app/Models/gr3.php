<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gr3 extends Model
{
    use HasFactory;
    protected $table = 'gr3s';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
