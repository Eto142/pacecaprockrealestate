<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $table = 'deposits';

    protected $fillable = [
        'user_id',
        'amount',
        'payment_method',
        'proof',
        'status',
        
    ];
    public function userDeposit()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
