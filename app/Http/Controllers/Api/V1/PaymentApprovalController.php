<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StorePaymentApprovalRequest;
use App\Http\Requests\V1\UpdatePaymentApprovalRequest;
use App\Http\Resources\V1\PaymentApprovalCollection;
use App\Http\Resources\V1\PaymentApprovalResource;
use App\Models\PaymentApproval;

class PaymentApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PaymentApprovalCollection(PaymentApproval::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\V1\StorePaymentApprovalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentApprovalRequest $request)
    {
        return new PaymentApprovalResource(PaymentApproval::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentApproval  $paymentApproval
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentApproval $paymentApproval)
    {
        return new PaymentApprovalResource($paymentApproval);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\V1\UpdatePaymentApprovalRequest  $request
     * @param  \App\Models\PaymentApproval  $paymentApproval
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentApprovalRequest $request, PaymentApproval $paymentApproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentApproval  $paymentApproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentApproval $paymentApproval)
    {
        //
    }
}
