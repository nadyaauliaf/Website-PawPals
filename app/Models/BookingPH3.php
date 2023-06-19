<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPH3 extends Model
{
    use HasFactory;
    protected $table = 'booking_p_h3_s';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
