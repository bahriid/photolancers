<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Photographer;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Utilities\Helpers;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'identity_number' => ['required', 'string', 'max:255'],
            'npwp' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'file'],
            'address' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'integer', 'max:255'],
            'city_id' => ['required', 'integer', 'max:255'],
            'bank_name' => ['required', 'string', 'max:255'],
            'bank_account_name' => ['required', 'string', 'email', 'max:255'],
            'bank_account_number' => ['required', 'string', 'email', 'max:255'],
            'instagram' => ['required', 'string', 'string', 'max:255'],
            'facebook' => ['required', 'string', 'string', 'max:255'],
            'twitter' => ['required', 'string', 'string', 'max:255'],
            'other' => ['required', 'string', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function create(array $data)
    {
        try {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'type' => 'photographer',
            ]);

            Photographer::create([
                'user_id' => $user->id,
                'identity_number' => $data['identity_number'],
                'npwp' => $data['npwp'],
                'phone' => $data['phone'],
                'photo' => $data['photo'],
                'date_of_birth' => $data['date_of_birth'],

                'headline' => $data['headline'],

                'instagram' => $data['instagram'],
                'facebook' => $data['facebook'],
                'twitter' => $data['twitter'],
                'other' => $data['other'],

                'address' => $data['address'],
                'province_id' => $data['province_id'],
                'city_id' => $data['city_id'],

                'bank_name' => $data['bank_name'],
                'bank_account_name' => $data['bank_account_name'],
                'bank_account_number' => $data['bank_account_number'],
            ]);

            return Helpers::successRedirect('registered', 'Successfully Register');
        }catch (\Exception $e){
            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
