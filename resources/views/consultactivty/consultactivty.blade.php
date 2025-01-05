@extends('layouts.appquotient')

@section('title', 'Daftar Pengguna')

@section('css')
    <!-- Tambahkan CSS tambahan jika dibutuhkan -->
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">

                <!-- BREADCRUMB -->
                <!-- /BREADCRUMB -->

                <!-- CONTENT AREA -->
                <div class="row layout-top-spacing">

                    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Data Murid</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputEmail2" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail2">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputPassword2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputPassword2">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Upload data xls</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="inputEmail2">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTENT AREA -->

            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2024</span>
                    <a target="_blank" href="https://namequotient.com/">Name Quotient</a>
                </p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Fundamental Intelligent
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                    </svg>
                </p>
            </div>
        </div>
        <!-- END FOOTER -->

    </div>
@endsection

@section('js')
    <!-- Tambahkan JS tambahan jika dibutuhkan -->
@endsection
