<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreTravelPaymentRequest;
use App\Http\Requests\V1\UpdateTravelPaymentRequest;
use App\Http\Resources\V1\TravelPaymentCollection;
use App\Http\Resources\V1\TravelPaymentResource;
use App\Models\TravelPayment;

class TravelPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TravelPaymentCollection(TravelPayment::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTravelPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTravelPaymentRequest $request)
    {
        return new TravelPaymentResource(TravelPayment::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TravelPayment  $travelPayment
     * @return \Illuminate\Http\Response
     */
    public function show(TravelPayment $travelPayment)
    {
        return new TravelPaymentResource($travelPayment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\V1\UpdateTravelPaymentRequest  $request
     * @param  \App\Models\TravelPayment  $travelPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTravelPaymentRequest $request, TravelPayment $travelPayment)
    {
        return $travelPayment->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TravelPayment  $travelPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(TravelPayment $travelPayment)
    {
        return $travelPayment->delete();
    }
}
