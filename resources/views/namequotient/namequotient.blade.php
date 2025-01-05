@extends('layouts.appquotient')

@section('title', 'Daftar Pengguna')

@section('css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        .dataTables_length select {
            width: 150px !important;
            /* Atur lebar sesuai kebutuhan */
        }
    </style>


@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">
                <!-- Breadcrumb -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Name Quotient&nbsp;&nbsp;</a></li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>&nbsp;&nbsp;

                            <button type="button" class="btn btn-light-success btn-rounded mb-2 ms-4"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus"></i> Add
                            </button>
                        </ol>
                    </nav>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Data Name Quotient</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Form Fields -->
                                <div class="form-group row  mb-1">
                                    <label for="colFormLabelSm"
                                        class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                    <div class="col-sm-9">
                                        <input type="name" class="form-control form-control-sm" id="name"
                                            placeholder="col-form-label-sm">
                                    </div>
                                </div>
                                <div class="form-group row  mb-1">
                                    <label for="colFormLabelSm"
                                        class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control form-control-sm" id="email"
                                            placeholder="col-form-label-sm">
                                    </div>
                                </div>

                                <!-- Additional Fields -->

                            </div>

                            <div class="modal-footer">
                                <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Cancel</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                        <div class="widget-content widget-content-area br-8">
                            <table id="zero-config" class="table dt-table-hover table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->nomor_hp }}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->role_id }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('namequotient.edit', $user->id) }}"
                                                        class="btn btn-sm btn-outline-dark" title="Edit">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form action="{{ route('namequotient.destroy', $user->id) }}"
                                                        method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                                            title="Delete" onclick="return confirm('Are you sure?')">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
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

        <!-- Footer -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
                        href="https://designreset.com/cork-admin/">DesignReset</a></p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#zero-config').DataTable({
                lengthMenu: [7, 10, 20, 50],
                pageLength: 10,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>'
                    },
                    info: "Showing page _PAGE_ of _PAGES_",
                    search: "Search:",
                    lengthMenu: "Display _MENU_ records"
                }
            });
        });
    </script>

@endsection






{{-- @extends('layouts.appquotient')
@section('title', 'Dashboard')
@section('css')

@endsection
@section('content')

    <link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/light/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/light/components/tabs.css" rel="stylesheet" type="text/css">

    <link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/carousel.css" rel="stylesheet" type="text/css">
    <link href="../src/assets/css/dark/components/modal.css" rel="stylesheet" type="text/css" />
    <link href="../src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">

    <link href="../src/plugins/src/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
    <link href="../src/plugins/src/noUiSlider/nouislider.min.css" rel="stylesheet" type="text/css">


    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="../src/plugins/css/dark/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <!-- BEGIN PAGE LEVEL STYLES -->

    <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->


    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Name Quotient&nbsp;&nbsp;</a></li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>&nbsp;&nbsp;

                            <button type="button" class="btn-rounded btn-light-success mb-2 me-4" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Add
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Data Name Quotient</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="form-group row  mb-1">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                                <div class="col-sm-9">
                                                    <input type="name" class="form-control form-control-sm"
                                                        id="name" placeholder="col-form-label-sm">
                                                </div>
                                            </div>
                                            <div class="form-group row  mb-1">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control form-control-sm"
                                                        id="email" placeholder="col-form-label-sm">
                                                </div>
                                            </div>

                                            <div class="form-group row  mb-1">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Birthday</label>
                                                <div class="col-sm-5">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="birthday" placeholder="col-form-label-sm">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="time" class="form-control form-control-sm"
                                                        id="time" placeholder="col-form-label-sm">
                                                </div>

                                            </div>

                                            <div class="form-group row  mb-1">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Birth
                                                    Place</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control form-control-sm"
                                                        id="Place" placeholder="col-form-label-sm">
                                                </div>
                                            </div>

                                            <div class="form-group row  mb-1">
                                                <label for="colFormLabelSm"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Address </label>
                                                <div class="col-sm-9">
                                                    <textarea id="textarea" class="form-control textarea" maxlength="225" rows="2"
                                                        placeholder="This textarea has a limit of 225 chars."></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button class="btn" data-bs-dismiss="modal"><i
                                                    class="flaticon-cancel-12"></i>
                                                Cancel</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row layout-top-spacing">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-8">
                            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th class="no-content">Status</th>
                                        <th class="no-content">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td class="text-center"><span
                                                class="shadow-none badge badge-success">Certificate</span></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark btn-sm">View</button>
                                                <button type="button"
                                                    class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                                    id="dropdownMenuReference1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    <a class="dropdown-item" href="#">Certificate</a>
                                                    <a class="dropdown-item" href="#">Email</a>
                                                    <a class="dropdown-item" href="#">History</a>
                                                    <!-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a> -->
                                                </div>
                                            </div>
                                        </td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2024</span> <a target="_blank"
                        href="https://namequotient.com/">Name Quotient</a></p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Fundamental Intellegent<svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->
    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="../src/plugins/src/global/vendors.min.js"></script>
    <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
    <script src="../layouts/vertical-dark-menu/app.js"></script>
    <script src="../src/assets/js/custom.js"></script>
    <script src="../src/plugins/src/highlight/highlight.pack.js"></script>
    <script src="../src/assets/js/scrollspyNav.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="../src/plugins/src/flatpickr/flatpickr.js"></script>
    <script src="../src/plugins/src/flatpickr/custom-flatpickr.js"></script>

    <script src="../src/plugins/src/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 10
        });
    </script>

    <script>
        function addVideoInModal(btnSelector, videoSource, modalSelector, iframeHeight, iframeWidth, iframeContainer) {
            var myModal = new bootstrap.Modal(document.getElementById(modalSelector), {
                keyboard: false
            })
            document.querySelector(btnSelector).addEventListener('click', function() {
                var src = videoSource;
                myModal.show('show');
                var ifrm = document.createElement("iframe");
                ifrm.setAttribute("src", src);
                ifrm.setAttribute('width', iframeWidth);
                ifrm.setAttribute('height', iframeHeight);
                ifrm.style.border = "0";
                ifrm.setAttribute("allow", "encrypted-media");
                document.querySelector(iframeContainer).appendChild(ifrm);
            })
        }

        addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560',
            '.yt-container')

        addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560',
            '.vimeo-container')
    </script>


    <!-- END PAGE LEVEL SCRIPTS -->
@endsection --}}
