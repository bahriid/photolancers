<?php

namespace App\Http\Controllers\Photographer;

use App\Http\Controllers\Controller;
use App\Utilities\Helpers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.detail');
    }

    public function update(Request $request)
    {
        $passwordValidated = [];

        if ($request->password) {
            $passwordValidated = [
                'password' => ['required', 'string', 'min:8', 'confirmed']
            ];
        }

        $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
            ] + $passwordValidated);

        try {
            \DB::beginTransaction();

            $user = auth()->user();

            $userData = [
                'name' => $validated['name'],
                'email' => $validated['email']
            ];

            if (isset($validated['password'])) {
                $userData['password'] = bcrypt($validated['password']);
            }

            $user->update($userData);
            \DB::commit();

            return Helpers::successRedirect('admin.profile', 'Successfully updated profile');
        } catch (\Exception $e) {
            \DB::rollBack();

            return Helpers::errorRedirect($e->getMessage());
        }
    }
}
