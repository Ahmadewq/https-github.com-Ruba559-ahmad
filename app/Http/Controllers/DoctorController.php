<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointement;
use App\Models\AdviceMedical;
use App\Models\Visit;
use DB;

class DoctorController extends Controller
{
    
    public function indexAppointement()
    {

        $appointement = Appointement::where('status' , 1)->get();

        return view('doctor.appointement' , compact('appointement'));
    }


    public function indexVisit()
    {

        $visit = Visit::get();
        
        return view('doctor.visit' , compact('visit'));
    }


    public function indexAdviceMedical()
    {

        $adviceMedical = AdviceMedical::get();
        
        return view('doctor.advice-medical' , compact('adviceMedical'));
    }


    public function indexReply(Request $request)
    {
           $clinic_id = $request->clinic_id;
           $patient_id = $request->patient_id;

        return view('doctor.add' , compact('clinic_id' , 'patient_id'));
    }


    public function Reply(Request $request)
    { 
        $adviceMedical = AdviceMedical::where('clinic_id' , $request->clinic_id)->where('patient_id' , $request->patient_id)->first();
        $adviceMedical->update([ 'reply' => $request->reply ]);

        return redirect('/advice_medical');
    }
}
