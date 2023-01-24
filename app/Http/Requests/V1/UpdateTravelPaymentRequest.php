<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTravelPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'user_id' => 'required|exists:users,id',
                'amount' => 'required|numeric'
            ];
            // PATCH
        } else {
            return [
                'user_id' => 'sometimes|exists:users,id',
                'amount' => 'sometimes|numeric'
            ];
        }
    }
}
