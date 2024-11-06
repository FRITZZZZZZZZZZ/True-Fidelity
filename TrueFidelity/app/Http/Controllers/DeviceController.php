<?php

namespace App\Http\Controllers;

use App\Models\device;
use App\Http\Requests\StoredeviceRequest;
use App\Http\Requests\UpdatedeviceRequest;
use App\Policies\DevicePolicy;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('devices');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredeviceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(device $device)
    {
        $devices = Device::all();
        return view('device_show', ['devices' => $devices]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedeviceRequest $request, device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(device $device)
    {
        //
    }
}
