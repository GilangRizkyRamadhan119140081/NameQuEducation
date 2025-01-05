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
                <li class="breadcrumb-item"><a href="#">News</a>
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

              <div class="widget-content widget-content-area  style-custom-1">
                <div class="container" style="max-width: 928px;">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 mb-5 p-0">
                      <div id="style1" class="carousel slide style-custom-1" data-bs-ride="carousel">

                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100 slide-image" src="../src/assets/img/1.jpeg" alt="First slide">
                            <div class="carousel-caption">
                              <span class="badge">Lifestyle</span>
                              <h3>How To Make More Blog By Doing Less</h3>
                              <div class="media">
                                <img src="../src/assets/img/profile-6.jpeg" class="" alt="avatar">
                                <div class="media-body">
                                  <h6 class="user-name">User name</h6>
                                  <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                      <line x1="16" y1="2" x2="16" y2="6"></line>
                                      <line x1="8" y1="2" x2="8" y2="6"></line>
                                      <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg> May 14, 2022</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slide-image" src="../src/assets/img/3.jpeg" alt="Second slide">
                            <div class="carousel-caption">
                              <span class="badge">Lifestyle</span>
                              <h3>How To Make Blog</h3>
                              <div class="media">
                                <img src="../src/assets/img/profile-6.jpeg" class="" alt="avatar">
                                <div class="media-body">
                                  <h6 class="user-name">User name</h6>
                                  <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                      <line x1="16" y1="2" x2="16" y2="6"></line>
                                      <line x1="8" y1="2" x2="8" y2="6"></line>
                                      <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg> April 30, 2022</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100 slide-image" src="../src/assets/img/2.jpg" alt="Third slide">
                            <div class="carousel-caption">
                              <span class="badge">Lifestyle</span>
                              <h3>Best Blog Android Apps</h3>
                              <div class="media">
                                <img src="../src/assets/img/profile-6.jpeg" class="" alt="avatar">
                                <div class="media-body">
                                  <h6 class="user-name">User name</h6>
                                  <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                      <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                      <line x1="16" y1="2" x2="16" y2="6"></line>
                                      <line x1="8" y1="2" x2="8" y2="6"></line>
                                      <line x1="3" y1="10" x2="21" y2="10"></line>
                                    </svg> April 25, 2022</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#style1" role="button" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#style1" role="button" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="info-box-2 col-6">
                      <div class="info-box-2-bg"></div>
                      <div class="info-box-2-bg-blur"></div>
                      <div class="info-box-2-content-wrapper">
                        <h3 class="info-box-2-title">Kick Start you new project with <br /> ease!</h3>
                        <div class="info-box-2-content">Lorem ipsum is placeholder text commonly used in the graphic,
                          print,
                          and
                          publishing.</div>
                        <a class="btn btn-rounded btn-custom mt-4" href="#">Read More</a>
                      </div>

                    </div>
                  </div>

                  <div class="info-box-1 color-2">
                    <div class="info-box-1-icon-wrapper">
                      <div class="info-box-1-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-coffee">
                          <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                          <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                          <line x1="6" y1="1" x2="6" y2="4"></line>
                          <line x1="10" y1="1" x2="10" y2="4"></line>
                          <line x1="14" y1="1" x2="14" y2="4"></line>
                        </svg>
                      </div>
                    </div>
                    <div class="info-box-1-content-wrapper">
                      <h3 class="info-box-1-title">CRM Project</h3>
                      <div class="info-box-1-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                    <a class="info-box-1-button" href="#">View Details </a>
                  </div>

                </div>

              </div>




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
    </div>

        @endsection
