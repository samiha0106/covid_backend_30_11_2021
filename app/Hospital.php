<?php

namespace App;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;


class Hospital extends Model
{
    use Uuids;
    protected $table = "hospitals";
    protected $fillable = ['center_name', 'zone', 'capacity'];
    protected $hidden=['id'];

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
}
