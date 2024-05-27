@extends('layouts._admin',[
    'title' => ['Packages', 'Detail Package']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Edit Profile Details</h2>
            </div>
        </div>
        <div class="card-body py-4">
            <form method="POST"
                  action="{{ route('cms.profile') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-10 mt-10 text-center">
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
                            title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                            <!--begin::Inputs-->
                            <input type="file" name="photo" accept=".png, .jpg, .jpeg"/>
                            <input type="hidden" name="photo"/>
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
                <div class="row mt-10">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Name: </label>
                        <input class="form-control" name="name"
                               value="{{$user['name']}}"/>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Email: </label>
                        <input class="form-control" name="email"
                               value="{{$user['email']}}"/>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Phone Number:</label>
                        <input class="form-control" name="phone"
                               value="{{$photographer['phone']}}"/>
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Date of Birth:</label>
                        <input class="form-control" placeholder="Pick a date" id="kt_datepicker_1" name="date_of_birth" value="{{$photographer['date_of_birth']}}"/>
                        @error('date_of_birth')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-10 col-12 fv-row">
                    <label class="required form-label">Full Address :</label>
                    <input class="form-control" name="address"
                           value="{{$photographer['address']}}"/>
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Province:</label>
                        <select class="form-select" name="province_id" id="province" onchange="getCities(this.value)">
                            <option disabled selected>Choose Province</option>
                        </select>
                        @error('province_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">City:</label>
                        <select class="form-select" name="city_id" id="city">
                            <option disabled selected>Choose City</option>
                        </select>
                        @error('city_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Instagram:</label>
                        <input class="form-control" name="instagram"
                               value="{{$photographer['instagram']}}"/>
                        @error('instagram')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Twitter:</label>
                        <input class="form-control" name="twitter"
                               value="{{$photographer['twitter']}}"/>
                        @error('twitter')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Facebook:</label>
                        <input class="form-control" name="facebook"
                               value="{{$photographer['facebook']}}"/>
                        @error('facebook')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Other Social Media:</label>
                        <input class="form-control" name="other"
                               value="{{$photographer['portofolio']}}"/>
                        @error('other')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="mb-10 fv-row">
                    <label class="form-label required">About Us:</label>
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
                        <a href="{{route('cms.dashboard')}}" class="mt-5 btn btn-light-primary me-2">Back</a>
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
            background-image: url('{{$photographer['photo']}}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{$photographer['photo']}}');
        }
    </style>
@endsection

@section('script')
    <script>
        $("#kt_datepicker_1").flatpickr();

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

        var existingDescription = `{!! $photographer['headline'] !!}`;
        quill.root.innerHTML = existingDescription;
        quill.on('text-change', function () {
            document.getElementById("content").value = quill.root.innerHTML;
        });
        document.getElementById("content").value = quill.root.innerHTML;

        $(document).ready(function () {
            Inputmask({
                alias: "currency",
                prefix: 'Rp. ',
                allowMinus: false,
                removeMaskOnSubmit: true
            }).mask('#price');
        });


        function getProvinces(selectedProvinceId = null, selectedCityId = null) {
            axios.get(`{!! route('data.provinces') !!}`).then(({data: provinces}) => {
                const provinceSelect = $('#province');
                provinceSelect.empty().append('<option disabled selected>Choose Province</option>');

                provinces.forEach(province => {
                    provinceSelect.append(new Option(province.name, province.id));
                });

                if (selectedProvinceId) {
                    provinceSelect.val(selectedProvinceId).change(); // Trigger change to load cities
                }

                // Manually call getCities if selectedProvinceId is set
                if (selectedProvinceId && selectedCityId) {
                    getCities(selectedProvinceId, selectedCityId);
                }
            }).catch(error => {
                console.error(error);
            });
        }

        // Fetch the cities based on the selected province and set the selected city
        function getCities(provinceId, selectedCityId = null) {
            console.info(provinceId)
            const citySelect = $('#city');
            citySelect.empty().append('<option disabled selected>Choose City...</option>');
            const url = `{{ route('data.cities', ['id' => ':id']) }}`.replace(':id', provinceId);

            axios.get(url).then(({data}) => {
                data.cities.forEach(city => {
                    citySelect.append(new Option(city.name, city.id));
                });

                if (selectedCityId) {
                    citySelect.val(selectedCityId);
                }
            }).catch(error => {
                console.error(error);
            });
        }

        // Call the getProvinces function with the pre-selected values
        $(document).ready(function () {
            const selectedProvinceId = {{ $photographer['province_id'] }};
            const selectedCityId = {{ $photographer['city_id'] }};
            getProvinces(selectedProvinceId, selectedCityId);
        });
    </script>
@endsection
