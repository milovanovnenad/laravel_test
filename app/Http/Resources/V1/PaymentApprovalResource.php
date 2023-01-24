<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\PaymentApproval;

class PaymentApprovalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "payment_id" => $this->payment_id,
            "payment_type" => $this->payment_type,
            "type" => $this->type,
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
//            'payments' => PaymentApproval::whereHasMorph('paymentType', '*', function (Builder $query) {$query->where('type', '=', 'APPROVED');})->get() // not working
        ];
    }
}
