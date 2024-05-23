@extends('layouts._admin',[
    'title' => ['Packages']
])
@section('content')
    @include('layouts.notifications')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>Package List</h2>
            </div>
        </div>
        <!--begin::Card body-->
        <div class="card-body py-6">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 " id="table_packages">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th>Created At</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Photographer</th>
                    <th>Price</th>
                    <th>Action</th>
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
        $("#table_packages").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.packages.data') }}",
            columnDefs: [{
                targets: [0, 1, 2, 3],
            },],
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
                    data: 'category.name'
                },
                {
                    data: 'photographer.user.name'
                },
                {
                    data: 'price'
                },
                {
                    data: 'actionAdmin',
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
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection