<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    public function patient()
    {
        return $this->belongsTo('App\Patient','patient_id');
    }
    public function staff()
    {
        return $this->belongsTo('App\Staff','staff_id');
    }
    public function doctor()
    {
        return $this->belongsTo('App\Staff','doctor_id');
    }
    public function report()
    {
        return $this->belongsTo('App\Report','report_number');
    }
    public function clinic()
    {
        return $this->belongsTo('App\Clinic','clinic_id');
    }
    
    // public function tripS()
    // {
    //     return $this->hasMany('App\TripPassanger', 'trip');
    // }
    // public function frCity()
    // {
    //     return $this->belongsTo('App\City','from');
    // }
    // public function toCity()
    // {
    //     return $this->belongsTo('App\City','to');
    // }
    // public function carS()
    // {
    //     return $this->belongsTo('App\Car','car','id');
    // }
}
