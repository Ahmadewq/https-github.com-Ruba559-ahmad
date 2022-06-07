<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointement;
use App\Models\Clinic;
use App\Models\AdviceMedical;
use Illuminate\Support\Facades\Auth;

class ClinicController extends Controller
{
  
    public function addAppointement(Request $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'permission'=> 'required|max:191',
        //     'name'=> 'required|max:191',

        // ]);

        // if($validator->fails())
        // {
        //     return redirect('/add_rule')->withErrors($validator)
        //                 ->withInput();;
        // }

        $appointement = new Appointement();
        
        $appointement->clinic_id = $request->clinic_id;
        $appointement->date = $request->date;
        $appointement->time = $request->time;
        $appointement->patient_id = auth()->user()->id;
                    
        $appointement->save();

        return redirect('/');
    }


    public function indexAdvice()
    {
        $clinic = Clinic::get(); 

        return view('clinic.add_advice' , compact('clinic'));
    }


    public function addAdvice(Request $request)
    {

        $AdviceMedical = new AdviceMedical();
        
        $AdviceMedical->clinic_id = $request->clinic_id;
        $AdviceMedical->description = $request->description;
        $AdviceMedical->patient_id = auth()->user()->id;
                    
        $AdviceMedical->save();


        return redirect('/');
    }

    
    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}
