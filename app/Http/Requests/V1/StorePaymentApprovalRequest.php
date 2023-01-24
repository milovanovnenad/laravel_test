<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentApprovalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        if ($user->type == 'APPROVER') {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'payment_id' => 'required|integer',       // need custom validator
            'payment_type' => 'required|in:Payment,TravelPayment',
            'type' => 'required|in:APPROVED,DISAPPROVED'
        ];
    }
}
