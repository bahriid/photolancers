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
            <form method="POST" id="categoryForm" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-10 mt-10 text-center">
                    <div class="image-input image-input-empty image-input-placeholder " data-kt-image-input="true" >
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-125px h-125px"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                            <!--begin::Inputs-->
                            <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                            <input type="hidden" name="image"/>
                            <!--end::Inputs-->
                        </label>
                        <!--end::Edit button-->

                        <!--begin::Cancel button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Cancel avatar">
                            <i class="ki-outline ki-cross fs-3"></i>
                        </span>
                        <!--end::Cancel button-->

                        <!--begin::Remove button-->
                        <span
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Remove avatar">
                            <i class="ki-outline ki-cross fs-3"></i>
                        </span>
                        <!--end::Remove button-->
                    </div>
                    <!--end::Image input-->
                    <p id="imageError" class="text-danger" style="display: none;"></p>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 fv-row">
                    <label class="required form-label">Package Category Name:</label>
                    <input class="form-control" placeholder="Wedding" name="name"/>
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

@section('style')
    <style>
        .image-input-placeholder {
            background-image: url('{{asset('admin/assets/media/svg/avatars/blank.svg')}}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{asset('admin/assets/media/svg/avatars/blank-dark.svg')}}');
        }
    </style>
@endsection

@section('scripts')
    <script>
        document.getElementById('categoryForm').addEventListener('submit', function(event) {
            // Clear previous errors
            document.getElementById('imageError').style.display = 'none';

            // Check file size
            var imageInput = document.getElementById('imageUpload');
            if (imageInput.files.length > 0) {
                var fileSize = imageInput.files[0].size / 1024; // Size in KB
                if (fileSize > 1024) { // 1024 KB is 1MB
                    event.preventDefault();
                    document.getElementById('imageError').innerText = 'The image size must be less than 1MB.';
                    document.getElementById('imageError').style.display = 'block';
                }
            }
        });
    </script>
@endsection
