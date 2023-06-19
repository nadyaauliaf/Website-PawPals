<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPH2 extends Model
{
    use HasFactory;
    protected $table = 'booking_p_h2_s';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];
}
