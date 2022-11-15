<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\VATSIMUser;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/home";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'f_name' => ['required', 'string', 'max:191'],
            'l_name' => ['required', 'string', 'max:191'],
            'vatsim_cid' => ['required', 'int', 'min:7'],
            'dob' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

                //return $vatsim_api;
        $vatsim_api = Http::get("api.vatsim.net/api/ratings/$data[vatsim_cid]")->json();
    
        $vatsim = VATSIMUser::create([
            'cid' => $data['vatsim_cid'],
            'atc_rating' => $vatsim_api['rating'],
            'pilot_rating' => $vatsim_api['pilotrating'],
            'region' => $vatsim_api['region'],
            'division' => $vatsim_api['division'],
            'subdivision' => $vatsim_api['subdivision'],
            'last_rating_change' => $vatsim_api['lastratingchange'],
        ]);
        $vatsim->save();

        return User::create([
            'f_name' => $data['f_name'],
            'l_name' => $data['l_name'],
            'display_name' => $data['f_name']." ".$data['l_name'],
            'name_url' => Str::lower($data['f_name'])."-".Str::lower($data['l_name']),
            'vatsim_cid' => $data['vatsim_cid'],
            'dob' => $data['dob'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_pilot' => 0,
            'is_staff' => 0,
            'is_approved' => 0,
        ]);
    }
}
