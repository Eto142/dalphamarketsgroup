<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debitdeposit extends Model
{
    use HasFactory;
    protected $table = 'debitdeposits';
    protected $fillable = [
        'user_id',
        'amount',
 
 
    ];
}
