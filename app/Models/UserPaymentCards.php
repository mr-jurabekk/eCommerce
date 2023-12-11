<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentCards extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'number',
        'holder_name',
        'payment_card_type_id',
        'last_four_numbers',
        'exp_date'
    ];

    public function type()
    {
        return $this->belongsTo(PaymentCardType::class, 'payment_card_type_id', 'id');
    }
}
