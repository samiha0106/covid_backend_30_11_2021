<?php

namespace App;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use Uuids;
    protected $table="registrations";
    protected $fillable = ['name', 'age', 'gender', 'occupation','marital_status','date_of_birth','phone_no','address','zone','vaccine_center','date_of_vaccine','time-of_vaccine'];
    protected $hidden=['id'];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
