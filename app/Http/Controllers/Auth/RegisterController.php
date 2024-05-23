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

            'phone' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'image','mimes:jpg,png,jpeg', 'max:1024'],
            'address' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'instagram' => ['nullable', 'string', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'string', 'max:255'],
            'other' => ['nullable', 'string', 'string', 'max:255'],
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
            \DB::beginTransaction();

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => 'photographer',
            ]);

            $image = Helpers::uploadToStorage($data['photo'], $data['name'], 'photo');

            Photographer::create([
                'user_id' => $user->id,
                'phone' => $data['phone'],
                'photo' => $image,
                'date_of_birth' => $data['date_of_birth'],

                'headline' => $data['headline'],

                'instagram' => $data['instagram'],
                'facebook' => $data['facebook'],
                'twitter' => $data['twitter'],
                'portofolio' => $data['other'],

                'address' => $data['address'],
                'province_id' => $data['province_id'],
                'city_id' => $data['city_id'],
            ]);

            \DB::commit();

            return Helpers::successRedirect('registered', 'Successfully Register');
        }catch (\Exception $e){
            \DB::rollBack();

            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
