<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Patient;
use App\Staff;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $appointment=Appointment::all();
        
        return $appointment->map(function ($value) {
            $value->patient = Patient::find($value->patient);
            $value->doctor = Staff::find($value->doctor);
            $value->staff = Staff::find($value->staff);
            return $value;
        });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $appointment=new Appointment;
        $appointment->patient_id= $request->patient_id;
        $appointment->doctor_id= $request->doctor_id;
        $appointment->staff_id= $request->staff_id;
        $appointment->report_number= $request->report_number;
        $appointment->clinic_id= $request->clinic_id;
        $appointment->appointment_date =$request->appointment_date;
        $appointment->appointment_detail=$request->appointment_detail;

        if($appointment->save())
        {
            return $appointment;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment_para)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $appointment=Appointment::find($request->id);
        $appointment->patient_id= $request->patient_id;
        $appointment->doctor_id= $request->doctor_id;
        $appointment->staff_id= $request->staff_id;
        $appointment->report_number= $request->report_number;
        $appointment->clinic_id= $request->clinic_id;
        $appointment->appointment_date =$request->appointment_date;
        $appointment->appointment_detail=$request->appointment_detail;

        if($appointment->save())
        {
            return $appointment;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $appointment=Appointment::find($request->id);
        $appointment->state= 0;
       

        if($appointment->save())
        {
            return $appointment;
        }
    }
}
