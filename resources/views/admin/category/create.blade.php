@extends('layouts._admin',[
    'title' => ['Category', 'Create Category']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Create Category Name</h2>
            </div>
        </div>
        <div class="card-body py-4">
            <form method="POST" action="{{ route('admin.category.store') }}">
                @csrf
                <div class="mb-10 fv-row">
                    <label class="required form-label">Package Category Name:</label>
                    <input class="form-control" placeholder="Wedding" name="name" />
                    @error('name')
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
