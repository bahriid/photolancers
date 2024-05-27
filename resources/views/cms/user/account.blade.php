@extends('layouts._admin',[
    'title' => ['User', 'Profile']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Profile</h2>
            </div>
        </div>
        <div class="card-body py-4">
            <form method="POST" action="{{ route('cms.profile.password') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-10 mt-10 fv-row">
                    <label class="form-label required">Current Password :</label>
                    <input class="form-control" placeholder="Fill your current password" name="current_password"
                           type="password"/>
                    @error('current_password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 mt-10 fv-row">
                    <label class="form-label required">New Password :</label>
                    <input class="form-control" placeholder="Fill if you want to change password" name="password"
                           type="password"/>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 mt-10 fv-row">
                    <label class="form-label required">Repeat Password :</label>
                    <input class="form-control" placeholder="Repeat new password" name="password_confirmation"
                           type="password"/>
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="border-top d-flex justify-content-end mt-10">
                    <div class="ms-auto">
                        <a href="{{route('cms.dashboard')}}" class="mt-5 btn btn-light-primary me-2">Back</a>
                        <button type="submit" class="mt-5 btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
