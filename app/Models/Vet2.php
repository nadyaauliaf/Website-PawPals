<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet2 extends Model
{
    use HasFactory;
    protected $table = 'vet2s';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
