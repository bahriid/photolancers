@extends('layouts._client')
@section('content')
    <main class="main">
        <section class="pt-100 login-register">
            <div class="container">
                <div class="row login-register-cover">
                    <div class="col-md-8 col-sm-12 mx-auto">
                        <div class="text-center">
                            <p class="font-sm text-brand-2">Register </p>
                            <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
                            <p class="font-sm text-muted mb-30">Your application is subject to review. You can login
                                soon after we approve your application the latest by 3 working days. Check your
                                registered e-mail for further information and thanks for your interest to join The
                                Photolancers!</p>
                        </div>
                        @if ($message = Session::get('error'))
                            <div
                                class="alert alert-dismissible bg-danger d-flex flex-column align-items-center flex-sm-row">
                                <div class="d-flex flex-column align-items-center text-light ">
                                    <p class="m-0" style="color:#fff">{!! session('error') !!}</p>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div
                                class="alert alert-dismissible bg-danger d-flex flex-column align-items-center flex-sm-row">
                                <div class="d-flex flex-column align-items-center text-light ">
                                    <p class="m-0" style="color:#fff">Upss! Terjadi Kesalahan</p>
                                </div>
                            </div>
                        @endif
                        <form class="login-register text-start mt-20 row" method="POST" enctype="multipart/form-data"
                              action="{{ route('register') }}">
                            @csrf
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-1">Full Name *</label>
                                    <input class="form-control" id="input-1" type="text" required="" name="name"
                                           placeholder="Great Photographer">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-2">Email *</label>
                                    <input class="form-control" id="input-2" type="email" required="" name="email"
                                           placeholder="great@photographer.com">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-3">Password *</label>
                                    <input class="form-control" id="input-3" type="password" required="" name="password"
                                           placeholder="*********">
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-4">Repeat Password *</label>
                                    <input class="form-control" id="input-4" type="password" required=""
                                           name="password_confirmation"
                                           placeholder="*********">
                                    @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="input-9">About You *</label>
                                    <textarea rows="5" id="input-9" class="font-sm color-text-paragraph-2"
                                              name="headline" placeholder="Tell us about you"></textarea>
                                    @error('headline')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-start mb-10 mt-10 pt-10 pb-10">Your Personal Information</div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-7">Phone Number *</label>
                                    <input class="form-control" id="input-7" type="text" required="" name="phone"
                                           placeholder="081212341234">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="datepicker">Date Of Birth *</label>
                                    <input type="text" class="form-control" id="datepicker" name="date_of_birth"
                                           placeholder="Pick a date"/>
                                    @error('date_of_birth')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="input-8">Your Photo *</label>
                                    <input class="form-control" id="input-8" type="file" required="" name="photo"
                                           placeholder="Fill your photo">
                                    @error('photo')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="input-9">Full Address *</label>
                                    <textarea rows="5" id="input-9" class="font-sm color-text-paragraph-2"
                                              name="address" placeholder="Full Address"></textarea>
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-10">Province *</label>
                                    <select class="form-select form-control" aria-label="Pick a Province"
                                            id="province" name="province_id" onchange="getCities(this)">
                                        <option disabled selected>Pilih Provinsi ...</option>
                                    </select>
                                    @error('province_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-11">City *</label>
                                    <select class="form-select form-control" aria-label="Pick a City"
                                            id="city" name="city_id">
                                        <option disabled selected>Pilih Kabupaten/Kota ...</option>
                                    </select>
                                    @error('city_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-start mb-10 mt-10 pt-10 pb-10">Your Social Media</div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-15">Instagram</label>
                                    <input class="form-control" id="input-15" type="text" name="instagram"
                                           placeholder="Your instagram link">
                                    @error('instagram')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-16">Facebook</label>
                                    <input class="form-control" id="input-16" type="text" name="facebook"
                                           placeholder="Your facebook link">
                                    @error('facebook')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-17">Twitter</label>
                                    <input class="form-control" id="input-17" type="text" name="twitter"
                                           placeholder="Your twitter link">
                                    @error('twitter')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="input-18">Other Social Media</label>
                                    <input class="form-control" id="input-18" type="text" name="other"
                                           placeholder="Your other social media link">
                                    @error('other')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mt-5">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit &amp;
                                    Register
                                </button>
                            </div>
                            <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Sign
                                    in</a></div>
                        </form>
                    </div>
                    <div class="img-1 d-none d-lg-block"><img class="shape-1"
                                                              src="assets/imgs/page/login-register/img-1.svg"
                                                              alt="JobBox"></div>
                    <div class="img-2"><img src="assets/imgs/page/login-register/img-2.svg" alt="JobBox"></div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        $("#datepicker").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });

        function getProvinces() {
            axios.get(`{!! route('data.provinces') !!}`).then(({data: provinces}) => {
                provinces.forEach(province => {
                    $('#province').append(new Option(province.name, province.id));
                });
                console.log(provinces)
            }).catch(error => {
            })
        }

        function getCities(event) {
            $('#city').html('<option disabled selected>Pilih Kabupaten/Kota ...</option>');
            const url = `{{ route('data.cities', ['id' => ':id']) }}`.replace(':id', event.value);

            axios.get(url).then(({data}) => {
                data.cities.forEach(city => {
                    $('#city').append(new Option(city.name, city.id));
                });
            }).catch(error => {
            })
        }

        getProvinces()

    </script>
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css">
    <style>
        .form-control:disabled, .form-control[readonly] {
            background-color: #fff;
        }

        #input-8 {
            line-height: 25px;
        }
    </style>
@endsection
