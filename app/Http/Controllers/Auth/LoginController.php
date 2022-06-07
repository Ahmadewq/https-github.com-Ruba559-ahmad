<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Appointement;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    

    use AuthenticatesUsers;

   
   // protected $redirectTo = RouteServiceProvider::HOME;

  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:clinic')->except('logout');
        $this->middleware('guest:secretary')->except('logout');
    }


    public function Login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:3'
        ]);
        $clinic = Clinic::get(); 

        if (Auth::guard('secretary')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return view('index');
        }

        if (Auth::guard('clinic')->attempt(['email' => $request->email,'password' => $request->password], $request->get('remember'))) {
          
           $id_manegar = Clinic::find( auth('clinic')->user()->id);


        //   $place = Place::find($id_manegar->place_id);

         //  dd(auth("serviceManegar")->user()->id);
            $appointement = Appointement::where('status' , 0)->get();
            return view('doctor.appointement' , compact('appointement'));
        }

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
         $user = User::where('email', $request->email)->first();
         Auth::login($user);
         return view('clinic.clinic' , compact('clinic'));
        }
        else {
           return redirect()->intended('/login')->with(['message' => 'not match']);
        }
      
        return back()->withInput($request->only('email', 'remember'));
    }

}


