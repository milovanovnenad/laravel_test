<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Payment;
use App\Models\TravelPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentApproval>
 */
class PaymentApprovalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $type = fake()->randomElement(['Payment', 'TravelPayment']);
        $paymentId = $type == 'Payment' ? Payment::Factory() : TravelPayment::Factory();

        return [
            'user_id' => User::Factory(),
            'payment_id' => $paymentId,
            'payment_type' => $type,
            'type' => fake()->randomElement(['APPROVED', 'DISAPPROVED']),
        ];
    }
}
