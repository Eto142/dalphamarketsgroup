<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debitreferral extends Model
{
    use HasFactory;
    protected $table = 'debitreferrals';
    protected $fillable = [
        'user_id',
        'amount',
 
 
    ];
}
