<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserPaymentCards extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_card_type_id',
        'name',
        'number',
        'last_four_number',
        'expiration_date',
        'hoder_nmae'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function paymentCardType(): BelongsTo
    {
        return $this->belongsTo(PaymentCardType::class);
    }
}
