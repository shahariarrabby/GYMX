<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'Credit',
        'Debit',
        'Balance',
        'Type',
        'bkash_id',
        'card_id',
    ];
}
