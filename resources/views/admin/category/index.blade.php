@extends('layouts._admin',[
    'title' => ['Category']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <a type="button" class="btn btn-primary" href="{{ route('admin.category.create') }}">
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                  transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span>Create Category
                </a>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <!--begin::Card body-->
        <div class="card-body py-6">
            <!--begin::Table-->
            <table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="table_category">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start fw-semibold text-uppercase fs-6 text-gray-800">
                    <th>Created At</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
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
        $("#table_category").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.category.data') }}",
            columnDefs: [{
                targets: [0, 1, 2],
                className: "text-center",
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
                    data: 'name'
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
