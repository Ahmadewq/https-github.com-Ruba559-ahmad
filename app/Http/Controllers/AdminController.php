<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointement;
use App\Models\Clinic;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function indexAdmin()
    {
        $appointement = Appointement::where('status' , 0)->get(); 

        return view('admin.admin' , compact('appointement'));
    }


    public function addAccept(Request $request)
    { 
        $appointement = Appointement::where('id' , $request->id)->first();

        $appointement->update([ 'status' => '1' ]);

        $appointement = Appointement::where('status' , 0)->get(); 

        return redirect('index_admin')->with('appointement' , $appointement);
    }


    public function indexAddDoctor()
    {
      
        return view('admin.add_doctor');
    }


    public function addDoctor(Request $request)
    { 

        $clinic = new Clinic;
    
         $clinic->name = $request->name;
         $clinic->doctor_name = $request->doctor_name;
         $clinic->phone = $request->phone;
         $clinic->address = $request->address;
         $clinic->email = $request->email;
         $clinic->password = Hash::make($request->password);

         $clinic->save();

         return redirect('index_add_doctor')->with('message' , 'Success');

    }

}
