<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Registration;



class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $registration = new Registration;
        $registration->name = $request->name;
        $registration->slug = Str::slug($request->name);
        $registration->age = $request->age;
        $registration->gender = $request->gender;
        $registration->occupation = $request->occupation;
        $registration->marital_status = $request->marital_status;
        $registration->date_of_birth = $request->date_of_birth;
        $registration->phone_no = $request->phone_no;
        $registration->address = $request->address;
        $registration->zone = $request->zone;
        $registration->vaccine_center = $request->vaccine_center;
        $registration->date_of_vaccine = $request->date_of_vaccine;
        $registration->time_of_vaccine = $request->time_of_vaccine;

        $registration->save();
        return response()->json("Registration Data Insertion Done Successfully", 201);
    }
    public function show()
    {
        $registration = Registration::all();
        return response()->json($registration);
    }
    public function showId($id)
    {
        $registration = Registration::find($id);
        return response()->json($registration);
    }


    public function updateId(Request $request, $id)
    {
        $$registration = Registration::find($id);
        $registration->name = $req->name;
        $registration->age = $req->age;
        $registration->gender = $req->gender;
        $registration->occupation = $req->occupation;
        $registration->marital_status = $req->marital_status;
        $registration->date_of_birth = $req->date_of_birth;
        $registration->phone_no = $req->phone_no;
        $registration->address = $req->address;
        $registration->zone = $req->zone;
        $registration->vaccine_center = $req->vaccine_center;
        $registration->date_of_vaccine = $req->date_of_vaccine;
        $registration->time_of_vaccine = $req->time_of_vaccine;

        $registration->save();
        return response()->json("Registration Data Updated Successfully", 200);
    }


    public function deleteId(Request $request, $id)
    {
        $registration = Registration::find($id);
        $registration->delete();
        return response()->json("Registration Data Deleted Successfully", 204);
    }

    // public function showStatistics(){
    //     $registration = DB:: table('registrations')->get('*')->toArray();
    //     foreach($registration as $row){
    //         $data[]=array
    //         (
    //             'label'=>$row->name,
    //              'y'=>$row->zone
    //         );
    //         return view('statistics',['data'=>$data]);
    //     }
    // }
}
