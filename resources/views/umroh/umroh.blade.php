@extends('layouts.appquotient')
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

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
  <link href="../src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
  <link href="../src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
  <link href="../src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="../src/assets/css/light/forms/switches.css">
  <link href="../src/plugins/css/light/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../src/assets/css/dark/forms/switches.css">
  <link href="../src/plugins/css/dark/pricing-table/css/component.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" type="text/css" href="../src/plugins/src/table/datatable/datatables.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/css/light/table/datatable/dt-global_style.css">
  <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/table/datatable/dt-global_style.css">

  <link rel="stylesheet" type="text/css" href="../src/plugins/css/dark/vanillaSelectBox/custom-vanillaSelectBox.css">

  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->





          <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
      <div class="layout-px-spacing">
        <div class="middle-content container-xxl p-0">

            <div class="row" id="cancel-row"></div>

          <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <br><br>
                  </div>
                </div>
                <div class="widget-content widget-content-area">
                  <div class="pricing-table-2 ">
                    <div class="pricing-plans-container mt-6 billed-yearly">

                      <!-- Plan -->
                      <div class="pricing-plan mb-5">
                        <span class="badge badge-pill badge-warning show">45% Off</span>
                        <div class="pricing-header-section">
                          <div class="pricing-header">
                            <h3>NYAMAN</h3>
                            <p>Most Popular</p>
                          </div>

                          <div class="pricing-header-pricing">
                            <p class="pricing monthly-pricing">$ 9.50</p>
                            <p class="pricing yearly-pricing">56.8 Juta</p>
                            <p class="sub-title monthly-pricing-label">18 Hari</p>
                          </div>
                        </div>

                        <div class="pricing-plan-features mb-1">
                          <ul>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Hotel Five Stars</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 2 Guests / Room</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Umroh Dalam Hitungan Quran</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Semua Tahapan Dalam Angka</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Bersama Kyai Fauzan</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 24 Hours Support</li>
                          </ul>
                        </div>
                        <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                          Started</a>
                      </div>
                      <!-- Plan -->
                      <div class="pricing-plan mb-5 recommanded">

                        <span class="badge badge-pill badge-warning show">35% Off</span>

                        <div class="pricing-header-section">
                          <div class="pricing-header">
                            <h3>TENANG</h3>
                            <p>Recommended</p>
                          </div>

                          <div class="pricing-header-pricing">
                            <p class="pricing monthly-pricing">$ 19.50</p>
                            <p class="pricing yearly-pricing">50.7 Juta</p>
                            <p class="sub-title monthly-pricing-label">15 Hari</p>
                          </div>
                        </div>

                        <div class="pricing-plan-features mb-4">
                          <ul>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Hotel Five Stars</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 2 Guests / Room</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Umroh Dalam Hitungan Quran</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Semua Tahapan Dalam Angka</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Bersama Kyai Fauzan</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 24 Hours Support</li>
                          </ul>
                        </div>

                        <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                          Started</a>
                      </div>
                      <!-- Plan -->
                    </div>
                    <div class="pricing-plans-container mt-6 billed-yearly">
                      <!-- Plan -->
                      <div class="pricing-plan mb-5">

                        <span class="badge badge-pill badge-warning show">25% Off</span>

                        <div class="pricing-header-section">
                          <div class="pricing-header">
                            <h3>SENANG</h3>
                            <p>Best Value</p>
                          </div>

                          <div class="pricing-header-pricing">
                            <p class="pricing monthly-pricing">$ 9.50</p>
                            <p class="pricing yearly-pricing">34.2 Juta</p>
                            <p class="sub-title monthly-pricing-label">12 Hari</p>
                          </div>
                        </div>

                        <div class="pricing-plan-features mb-4">
                          <ul>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Hotel Five Stars</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 3 Guests / Room</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Umroh Dalam Hitungan Quran</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Semua Tahapan Dalam Angka</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Bersama Kyai NQ Char.Reader</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 24 Hours Support</li>
                          </ul>
                        </div>
                        <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                          Started</a>
                      </div>
                      <!-- Plan -->
                      <div class="pricing-plan mb-5 recommanded">

                        <span class="badge badge-pill badge-warning show">15% Off</span>

                        <div class="pricing-header-section">
                          <div class="pricing-header">
                            <h3>SENYUM</h3>
                            <p>Most Value</p>
                          </div>

                          <div class="pricing-header-pricing">
                            <p class="pricing monthly-pricing">$ 19.50</p>
                            <p class="pricing yearly-pricing">32.3 Juta</p>
                            <p class="sub-title monthly-pricing-label">10 Hari</p>
                          </div>
                        </div>

                        <div class="pricing-plan-features mb-4">
                          <ul>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Hotel Five Stars</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 4 Guests / Room</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Umroh Dalam Hitungan Quran</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Semua Tahapan Dalam Angka</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> Bersama Kyai NQ Char.Reader</li>
                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-check">
                                  <polyline points="20 6 9 17 4 12"></polyline>
                                </svg></span> 24 Hours Support</li>
                          </ul>
                        </div>

                        <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Get
                          Started</a>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- BREADCRUMB -->
          <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Name Quotient&nbsp;&nbsp;</a></li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-users">
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

                        <div class="form-group row  mb-1">
                          <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                          <div class="col-sm-9">
                            <input type="name" class="form-control form-control-sm" id="name"
                              placeholder="col-form-label-sm">
                          </div>
                        </div>
                        <div class="form-group row  mb-1">
                          <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control form-control-sm" id="email"
                              placeholder="col-form-label-sm">
                          </div>
                        </div>

                        <div class="form-group row  mb-1">
                          <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Birthday</label>
                          <div class="col-sm-5">
                            <input type="date" class="form-control form-control-sm" id="birthday"
                              placeholder="col-form-label-sm">
                          </div>
                          <div class="col-sm-4">
                            <input type="time" class="form-control form-control-sm" id="time"
                              placeholder="col-form-label-sm">
                          </div>

                        </div>

                        <div class="form-group row  mb-1">
                          <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Birth
                            Place</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control form-control-sm" id="Place"
                              placeholder="col-form-label-sm">
                          </div>
                        </div>

                        <div class="form-group row  mb-1">
                          <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Address </label>
                          <div class="col-sm-9">
                            <textarea id="textarea" class="form-control textarea" maxlength="225" rows="2"
                              placeholder="This textarea has a limit of 225 chars."></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>
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
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>Avatar</th>
                          <th>Action</th>
                        </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>5421</td>
                        <td>
                          <div class="d-flex">
                            <div class="usr-img-frame mr-2 rounded-circle">
                              <img alt="avatar" class="img-fluid rounded-circle" src="../src/assets/img/boy.png">
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-dark btn-sm">Open</button>
                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                              id="dropdownMenuReference1" data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false" data-reference="parent">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                              </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
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
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
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
      document.querySelector(btnSelector).addEventListener('click', function () {
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

    addVideoInModal('#yt-video-link', 'https://www.youtube.com/embed/YE7VzlLtp-4', 'videoMedia1', '315', '560', '.yt-container')

    addVideoInModal('#vimeo-video-link', 'https://player.vimeo.com/video/1084537', 'videoMedia2', '315', '560', '.vimeo-container')

  </script>


  <!-- END PAGE LEVEL SCRIPTS -->
@endsection
