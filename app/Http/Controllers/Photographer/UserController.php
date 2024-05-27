<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Models\Photographer;
use App\Utilities\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function password()
    {
        return view('cms.user.account');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'current_password' => ['required', 'string', 'min:8'],
        ]);

        try {
            \DB::beginTransaction();

            $user = auth()->user();

            if (!Hash::check($validated['current_password'], $user->password)) {
                return Helpers::errorRedirect('Your current password is incorrect');
            }

            $user->password = Hash::make($validated['password']);
            $user->save();

            \DB::commit();
            return Helpers::successRedirect('cms.profile', 'Successfully updated password');
        } catch (\Exception $e) {
            \DB::rollBack();

            return Helpers::errorRedirect($e->getMessage());
        }
    }

    public function edit(Request $request)
    {
        $user = auth()->user();
        $photographer = Photographer::where('user_id', $user->id)->first();
        return view('cms.user.detail', compact('user', 'photographer'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(auth()->user()->id)],

            'phone' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:1024'],
            'address' => ['required', 'string', 'max:255'],
            'province_id' => ['required', 'integer'],
            'city_id' => ['required', 'integer'],
            'instagram' => ['nullable', 'string', 'string', 'max:255'],
            'facebook' => ['nullable', 'string', 'string', 'max:255'],
            'twitter' => ['nullable', 'string', 'string', 'max:255'],
            'other' => ['nullable', 'string', 'string', 'max:255'],
        ]);

        try {
            \DB::beginTransaction();

            $user = auth()->user();
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->save();

            $photographer = Photographer::where('user_id', $user->id)->first();
            if ($validated['photo']){
                $image = Helpers::uploadToStorage($validated['photo'], $validated['name'], 'photo');
                $photographer->photo = $image;
            }
            $photographer->phone = $validated['phone'];
            $photographer->date_of_birth = $validated['date_of_birth'];
            $photographer->address = $validated['address'];
            $photographer->province_id = $validated['province_id'];
            $photographer->city_id = $validated['city_id'];
            $photographer->instagram = $validated['instagram'];
            $photographer->facebook = $validated['facebook'];
            $photographer->twitter = $validated['twitter'];
            $photographer->portofolio = $validated['other'];
            $photographer->save();

            \DB::commit();
            return Helpers::successRedirect('cms.profile', 'Successfully updated password');
        } catch (\Exception $e) {
            \DB::rollBack();

            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
