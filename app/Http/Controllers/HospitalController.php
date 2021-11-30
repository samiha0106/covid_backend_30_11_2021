<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Hospital;
use Illuminate\Validation\Rule;
use App\Rules\Capacity;

class HospitalController extends Controller
{

    public function rules(){
        return[
            'capacity'=>[
                'required', new Capacity(),
            ],
        ];
    }
    public function store(Request $request)
    {
        $hospital = new Hospital;
        $hospital->center_name = $request->center_name;
        $hospital->slug = Str::slug($request->center_name);
        $hospital->zone = $request->zone;
        $hospital->capacity = $request->capacity;
        
        $hospital->save();
        return response()->json("Hospital Name Insertion Done Successfully", 201);
    }
    public function show()
    {
        $hospital = Hospital::all();
        return response()->json($hospital);
    }
    public function showId($id)
    {
       $hospital = Hospital::find($id);
        return response()->json($hospital);
    }


    public function updateId(Request $request, $id)
    {
        $hospital = Hospital::find($id);
        $hospital->center_name = $request->center_name;
        $hospital->zone = $request->zone;
        $hospital->capacity = $request->capacity;

        $hospital->save();
        return response()->json("Hospital Name Updated Successfully", 200);
    }


    public function deleteId(Request $request, $id)
    {
        $hospital = Hospital::find($id);
        $hospital->delete();
        return response()->json("Hospital Name Deleted Successfully", 204);
    }


}
