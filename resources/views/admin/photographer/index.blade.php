@extends('layouts._admin',[
    'title' => ['Category']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body py-10">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 " id="table_photographer">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th>Created At</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th></th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
@endsection

@section('script')
    <script src="{{ url('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $("#table_photographer").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.photographer.data') }}",
            columnDefs: [{
                targets: [0, 1, 2,3,4,5],
                // width : '160px',
            }, ],
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"],
            ],
            columns: [
                {
                    data: 'created_at',
                },
                {
                    data: 'image'
                },
                {
                    data: 'user.name'
                },
                {
                    data: 'user.email'
                },
                {
                    data: 'phone'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            "dom": "<'row mb-2'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endsection

@section('style')
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection
