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
            <form method="POST" action="{{ route('admin.profile.update') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-10 mt-10 fv-row">
                    <label class="required form-label">Name :</label>
                    <input class="form-control" placeholder="John Doe" name="name"
                           value="{{auth()->user()->name}}"/>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 mt-10 fv-row">
                    <label class="required form-label">Email :</label>
                    <input class="form-control" placeholder="Email" name="email"
                           value="{{auth()->user()->email}}"/>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 mt-10 fv-row">
                    <label class="form-label">Password :</label>
                    <input class="form-control" placeholder="Fill if you want to change password" name="password"
                           type="password"/>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 mt-10 fv-row">
                    <label class="form-label">Repeat Password :</label>
                    <input class="form-control" placeholder="Repeat new password" name="password_confirmation"
                           type="password"/>
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="border-top d-flex justify-content-end mt-10">
                    <div class="ms-auto">
                        <button type="submit" class="mt-5 btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
