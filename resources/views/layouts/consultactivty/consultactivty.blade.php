@extends('layouts.appquotient')
@section('title', 'Dashboard')
@section('css')

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
                <li class="breadcrumb-item"><a href="#">Page</a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-alert-circle">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="12" y1="8" x2="12" y2="12"></line>
                  <line x1="12" y1="16" x2="12" y2="16"></line>
                </svg>
                </li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Empty Page</li> -->
              </ol>
            </nav>
          </div>
          <!-- /BREADCRUMB -->

          <!-- CONTENT AREA -->
          <div class="row layout-top-spacing">

            <div class="col-12">
              <div class="alert alert-arrow-right alert-icon-right alert-light-warning alert-dismissible fade show mb-4"
                role="alert">

                <!-- <strong>Kick Start you new project with ease!</strong> Learn more about Starter Kit by refering to the <a target="_blank" href="https://designreset.com/cork/documentation/getting-started.html">Documentation</a> -->
              </div>
            </div>

            <div class="col-md-12">
            </div>

          </div>
          <!-- CONTENT AREA -->

        </div>

      </div>


  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="../src/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="../src/plugins/src/mousetrap/mousetrap.min.js"></script>
  <script src="../layouts/vertical-dark-menu/app.js"></script>
  <!-- END GLOBAL MANDATORY SCRIPTS -->

  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
  <script src="../src/plugins/src/apex/apexcharts.min.js"></script>
  <script src="../src/assets/js/dashboard/dash_1.js"></script>
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

@endsection
