@extends('layouts._admin',[
    'title' => ['Packages', 'Create Package']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Detail Package</h2>
            </div>
        </div>
        <div class="card-body py-4">
            <form method="POST"
                  action="{{ route('admin.packages.update', ['id' => $data['package']['id']]) }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="row mt-10">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Name:</label>
                        <input class="form-control" placeholder="Paket Wedding All in One" name="name"
                               value="{{$data['package']['name']}}"/>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Category</label>
                        <select class="form-select" name="category_id">
                            <option disabled selected>Pilih Category</option>
                            @forelse($data['categories'] as $category)
                                <option value="{{$category->id}}"
                                    {{$category->id == $data['package']['category_id'] ? 'selected': ''}}
                                >{{$category->name}}</option>
                            @empty
                                <option disabled selected>Category not found!</option>
                            @endforelse
                        </select>
                        @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Price:</label>
                        <input class="form-control" placeholder="Wedding" name="price" id="price"
                               value="{{$data['package']['price']}}"/>
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="form-label">Discount:</label>
                        <div class="input-group">
                            <input type="number" name="discount" class="form-control" placeholder="50"
                                   aria-label="Recipient's username" value="{{$data['package']['discount']}}"
                                   aria-describedby="basic-addon2"/>
                            <span class="input-group-text" id="basic-addon2">%</span>
                        </div>
                        @error('discount')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Duration:</label>
                        <div class="input-group">
                            <input type="number" name="duration" class="form-control" placeholder="50"
                                   aria-label="Recipient's username" value="{{$data['package']['duration']}}"
                                   aria-describedby="basic-addon2"/>
                            <span class="input-group-text" id="basic-addon2">Jam</span>
                        </div>
                        @error('duration')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Camera:</label>
                        <input class="form-control" placeholder="Wedding" name="camera"
                               value="{{$data['package']['camera']}}"/>
                        @error('camera')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Lenses:</label>
                        <input class="form-control" placeholder="Canon" name="lenses"
                               value="{{$data['package']['lenses']}}"/>
                        @error('lenses')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Media:</label>
                        <input class="form-control" placeholder="Google Drive" name="media"
                               value="{{$data['package']['media']}}"/>
                        @error('media')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Edited Photo:</label>
                        <div class="input-group">
                            <input type="number" name="edited_photo" class="form-control" placeholder="50"
                                   aria-label="Recipient's username" value="{{$data['package']['edited_photo']}}"
                                   aria-describedby="basic-addon2"/>
                            <span class="input-group-text" id="basic-addon2">Photo</span>
                        </div>
                        @error('edited_photo')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-10 col-12 col-lg-6 fv-row">
                        <label class="required form-label">Raw Photo:</label>
                        <select class="form-select" name="raw_photo">
                            <option disabled selected>Choose Raw Photo</option>
                            <option value="{{true}}" {{$data['package']['raw_photo'] ? 'selected': ''}}>Yes</option>
                            <option value="{{false}}" {{!$data['package']['raw_photo'] ? 'selected': ''}}>No</option>
                        </select>
                        @error('raw_photo')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
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
                <div class="fv-row">
                    <label class="form-label required">Images:</label>
                    <!--begin::Dropzone-->
                    <div class="dropzone" id="kt_dropzonejs_example_1">
                        <!--begin::Message-->
                        <div class="dz-message needsclick">
                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span
                                    class="path2"></span></i>

                            <!--begin::Info-->
                            <div class="ms-4">
                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Dropzone-->
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

        var uploadedDocumentMap = {}
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
            url: "{{ route('admin.packages.upload-image') }}", // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            addRemoveLinks: true,
            success: function (file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function () {
                @if(isset($data['package']) && $data['package']->images)
                var files = {!! json_encode($data['package']->images) !!}
                for(
                var i
            in
                files
            )
                {

                    var file = files[i];
                    file.url = file.url || file.path; // Ensure you have the correct URL property
                    file.name = file.url.split('/').pop();
                    this.options.addedfile.call(this, file);
                    this.options.thumbnail.call(this, file, file.url); // Set the thumbnail

                    // Ensure the file is marked as uploaded
                    file.previewElement.classList.add('dz-complete');
                    file.previewElement.classList.add('dz-image-preview'); // Add this class for proper styling
                    file.previewElement.querySelector("[data-dz-name]").innerText = file.name;
                    var img = file.previewElement.querySelector("img");
                    if (img) {
                        img.style.width = "120px";
                        img.style.height = "120px";
                        img.style.objectFit = "cover"; // Ensure the image fits within the specified dimensions
                    }

                    $('form').append('<input type="hidden" name="document[]" value="' + file.url + '">')
                }
                @endif
            }
        });

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

        var existingDescription = `{!! $data['package']['description'] !!}`;
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
            const selectedProvinceId = {{ $data['package']['province_id'] }};
            const selectedCityId = {{ $data['package']['city_id'] }};
            getProvinces(selectedProvinceId, selectedCityId);
        });
    </script>
@endsection
