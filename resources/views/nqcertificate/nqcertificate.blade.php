@extends('layouts.appquotient')
@section('title', 'Dashboard')
@section('css')
  <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

  <link href="../src/assets/css/light/elements/search.css" rel="stylesheet" type="text/css" />
  <link href="../src/assets/css/dark/elements/search.css" rel="stylesheet" type="text/css" />

  <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection
@section('content')

    <div id="content" class="main-content">
      <div class="container">
        <div class="container">
          <div class="row layout-top-spacing">
            <div id="searchLive" class="col-lg-12 layout-spacing">
              <div class="statbox widget box box-shadow">

                <div class="widget-content widget-content-area text-center tags-content">

                  <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-9 filtered-list-search mx-auto">
                      <form class="form-inline my-2 my-lg-0 justify-content-center">
                        <div class="w-100">
                          <input type="text" class="w-100 form-control product-search br-30" id="input-search"
                            placeholder="Search data...">
                          <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                              class="feather feather-search">
                              <circle cx="11" cy="11" r="8"></circle>
                              <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg></button>
                        </div>
                      </form>
                    </div>
                    <div class="col-lg-12">

                      <div class="searchable-container">
                        <div class="row">
                          <div class="col-md-12">

                            <div class="searchable-items">
                              <div class="items">
                                <div class="user-profile">
                                  <img src="../src/assets/img/profile-5.jpeg" alt="avatar">
                                </div>
                                <div class="user-name">
                                  <p class="">Alan Green</p>
                                </div>
                                <div class="user-email">
                                  <p>alan@mail.com</p>
                                </div>
                                <div class="user-status">
                                  <span class="badge outline-badge-info">Active</span>
                                </div>
                                <div class="action-btn">
                                  <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-more-horizontal">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="19" cy="12" r="1"></circle>
                                      <circle cx="5" cy="12" r="1"></circle>
                                    </svg></p>
                                </div>
                              </div>

                              <div class="items">
                                <div class="user-profile">
                                  <img src="../src/assets/img/profile-11.jpeg" alt="avatar">
                                </div>
                                <div class="user-name">
                                  <p class="">Linda Nelson</p>
                                </div>
                                <div class="user-email">
                                  <p>Linda@mail.com</p>
                                </div>
                                <div class="user-status">
                                  <span class="badge outline-badge-danger">Busy</span>
                                </div>
                                <div class="action-btn">
                                  <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-more-horizontal">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="19" cy="12" r="1"></circle>
                                      <circle cx="5" cy="12" r="1"></circle>
                                    </svg></p>
                                </div>
                              </div>

                              <div class="items">
                                <div class="user-profile">
                                  <img src="../src/assets/img/profile-12.jpeg" alt="avatar">
                                </div>
                                <div class="user-name">
                                  <p class="">Lila Perry</p>
                                </div>
                                <div class="user-email">
                                  <p>Lila@mail.com</p>
                                </div>
                                <div class="user-status">
                                  <span class="badge outline-badge-warning">Closed</span>
                                </div>
                                <div class="action-btn">
                                  <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-more-horizontal">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="19" cy="12" r="1"></circle>
                                      <circle cx="5" cy="12" r="1"></circle>
                                    </svg></p>
                                </div>
                              </div>


                              <div class="items">
                                <div class="user-profile">
                                  <img src="../src/assets/img/profile-3.jpeg" alt="avatar">
                                </div>
                                <div class="user-name">
                                  <p class="">Andy King</p>
                                </div>
                                <div class="user-email">
                                  <p>Andy@mail.com</p>
                                </div>
                                <div class="user-status">
                                  <span class="badge outline-badge-info">Active</span>
                                </div>
                                <div class="action-btn">
                                  <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-more-horizontal">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="19" cy="12" r="1"></circle>
                                      <circle cx="5" cy="12" r="1"></circle>
                                    </svg></p>
                                </div>
                              </div>

                              <div class="items">
                                <div class="user-profile">
                                  <img src="../src/assets/img/profile-15.jpeg" alt="avatar">
                                </div>
                                <div class="user-name">
                                  <p class="">Jesse Cory</p>
                                </div>
                                <div class="user-email">
                                  <p>Jesse@mail.com</p>
                                </div>
                                <div class="user-status">
                                  <span class="badge outline-badge-danger">Busy</span>
                                </div>
                                <div class="action-btn">
                                  <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="feather feather-more-horizontal">
                                      <circle cx="12" cy="12" r="1"></circle>
                                      <circle cx="19" cy="12" r="1"></circle>
                                      <circle cx="5" cy="12" r="1"></circle>
                                    </svg></p>
                                </div>
                              </div>


                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

      <!--  BEGIN FOOTER  -->
      <div class="footer-wrapper">
        <div class="footer-section f-section-1">
          <p class="">Copyright © <span class="dynamic-year">2022</span> <a target="_blank"
              href="https://designreset.com/cork-admin/">DesignReset</a></p>
        </div>
        <div class="footer-section f-section-2">
          <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-heart">
              <path
                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
              </path>
            </svg></p>
        </div>
      </div>
      <!--  END FOOTER  -->

    </div>

    @endsection
</html>
