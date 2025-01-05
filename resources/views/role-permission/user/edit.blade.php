@extends('layouts.quotient')
@section('title', 'Dashboard')
@section('css')
<link href="{{ asset('src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/dark/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

<link href="../src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<link href="../layouts/modern-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />

<link href="../layouts/modern-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />

<!-- END GLOBAL MANDATORY STYLES -->



<!--  BEGIN CUSTOM STYLE FILE  -->

<link href="../src/assets/css/light/scrollspyNav.css" rel="stylesheet" type="text/css" />

<link href="../src/assets/css/dark/scrollspyNav.css" rel="stylesheet" type="text/css" />

<!--  END CUSTOM STYLE FILE  -->
@endsection
@section('sidebardashboard')
<ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
    <li class="">
        <a href="{{ url('users') }}">Users</a>
    </li>
    <li>#
        <a href="#">Roles</a>
    </li>
    <li>
        <a href="#">Permissions</a>
    </li>
</ul>
@endsection
@section('content')

<div id="content" class="main-content">

    <div class="container">



        <div class="container">



            <!-- BREADCRUMB -->

            <div class="page-meta">

                <nav class="breadcrumb-style-one" aria-label="breadcrumb">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">Form</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Basic</li>

                    </ol>

                </nav>

            </div>



            <div class="col-lg-12 col-12  layout-spacing">

                <div class="statbox widget box box-shadow">

                    <div class="widget-header">

                        <div class="row">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">

                                <h4>Form groups</h4>

                            </div>

                        </div>

                    </div>

                    <div class="widget-content widget-content-area">

                        <form>

                            <div class="form-group mb-4">

                                <label for="formGroupExampleInput">Example label</label>

                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">

                            </div>

                            <div class="form-group mb-4">

                                <label for="formGroupExampleInput2">Another label</label>

                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">

                            </div>

                            <input type="submit" name="time" class="btn btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
