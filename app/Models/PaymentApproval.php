<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentApproval extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "payment_id",
        "payment_type",
        "type"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function paymentType() {
        return $this->morphTo();
    }
}
