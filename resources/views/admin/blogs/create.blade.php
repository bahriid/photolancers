@extends('layouts._admin',[
    'title' => ['Blogs', 'Create Blog']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Create Blog</h2>
            </div>
        </div>
        <div class="card-body py-4">
            <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-5 mt-10 text-center">
                    <div class="image-input image-input-empty image-input-placeholder " data-kt-image-input="true">
                        <!--begin::Image preview wrapper-->
                        <div class="image-input-wrapper w-125px h-125px"></div>
                        <!--end::Image preview wrapper-->

                        <!--begin::Edit button-->
                        <label
                            class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change"
                            data-bs-toggle="tooltip"
                            data-bs-dismiss="click"
                            title="Change banner">
                            <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                            <!--begin::Inputs-->
                            <input type="file" name="banner" accept=".png, .jpg, .jpeg"/>
                            <input type="hidden" name="banner"/>
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
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="text-center  mt-5">
                    <label class="required form-label">Banner</label>
                </div>
                <div class="mb-10 fv-row">
                    <label class="required form-label">Title:</label>
                    <input class="form-control" placeholder="Tips how to take a good photos" name="title"/>
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 fv-row">
                    <label class="required form-label">Category:</label>
                    <select class="form-select" name="category">
                        <option disabled selected>Choose Category</option>
                        <option value="News">News</option>
                        <option value="Tips">Tips</option>
                    </select>
                    @error('category')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 fv-row">
                    <label class="form-label required">Description:</label>
                    <textarea style="display:none;" id="content" name="description"></textarea>
                    <div id="description">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
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

@section('script')
    <script>
        var quill = new Quill('#description', {
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Type your text here...',
            theme: 'snow' // or 'bubble'
        });
        quill.on('text-change', function () {
            document.getElementById("content").value = quill.root.innerHTML;
        });
    </script>
@endsection
