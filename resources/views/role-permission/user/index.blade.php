@extends('layouts.quotient')
@section('title', 'Dashboard')
@section('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">

<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css">

<link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css">

<!-- END PAGE LEVEL STYLES -->

@endsection
@section('sidebardashboard')
<ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
    <li class="active">
        <a href="{{ url('users') }}">Users</a>
    </li>
    <li>
        <a href="#">Roles</a>
    </li>
    <li>
        <a href="#">Permissions</a>
    </li>
</ul>
@endsection
@section('content')

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!-- BREADCRUMB -->
                    <div class="page-meta">
                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /BREADCRUMB -->



                    <div class="seperator-header">
                        <h4 class="">Users</h4>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="html5-custom" class="table dt-table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Roles</th>
                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->getRoleNames() as $rolename)
                                                        <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                @can('update user')
                                                <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-success">Edit</a>
                                                @endcan

                                                @can('delete user')
                                                <a href="{{ url('users/'.$user->id.'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                                @endcan
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



@endsection
@section('js')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="../src/plugins/src/global/vendors.min.js"></script>
<script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="../src/plugins/src/waves/waves.min.js"></script>
<script src="../layouts/modern-dark-menu/app.js"></script>


<script src="../src/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../src/plugins/src/table/datatable/datatables.js"></script>
<script src="../src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="../src/plugins/src/table/datatable/button-ext/jszip.min.js"></script>
<script src="../src/plugins/src/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="../src/plugins/src/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="../src/plugins/src/table/datatable/custom_miscellaneous.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    c3 = $('#html5-custom').DataTable({
        dom:
        // Bagian atas dengan result number di kiri, export buttons di tengah, dan search di kanan
        "<'dt--top-section'<'row'<'col-12 col-sm-4 d-flex justify-content-start'l><'col-12 col-sm-4 d-flex justify-content-center'B><'col-12 col-sm-4 d-flex justify-content-end'f>>>"+
        // Tabel ditampilkan
        "<'table-responsive'tr>"+
        // Bagian bawah dengan pagination di kanan dan result number di kiri
        "<'dt--bottom-section d-flex justify-content-between'<'dt--pages-count'i><'dt--pagination'p>>",

        buttons: [
            {
                extend: 'excelHtml5',
                text: 'Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'csvHtml5',
                text: 'CSV',
                className: 'btn btn-info'
            },
            {
                extend: 'pdfHtml5',
                text: 'PDF',
                className: 'btn btn-danger'
            },
            {
                extend: 'print',
                text: 'Print',
                className: 'btn btn-warning'
            }
        ],

        oLanguage: {
            oPaginate: {
                sPrevious: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                sNext: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            sInfo: "Showing page _PAGE_ of _PAGES_",
            sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            sSearchPlaceholder: "Search...",
            sLengthMenu: "Results :  _MENU_",
        },
        stripeClasses: [],
        lengthMenu: [5, 10, 20, 50],
        pageLength: 10
    });

    multiCheck(c3);
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
