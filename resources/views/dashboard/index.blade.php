@extends('dashboard.layouts.main')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-primary mb-4 text-white">
                    <div class="card-body d-flex justify-content-between align-items-start pb-0">
                        <div>
                            <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                    <svg class="icon">
                                        <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                        </use>
                                    </svg>)</span></div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0 text-white" data-coreui-toggle="dropdown" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                    </use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="{{ url('#') }}">Action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Another action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mx-3 mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-info mb-4 text-white">
                    <div class="card-body d-flex justify-content-between align-items-start pb-0">
                        <div>
                            <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                                    <svg class="icon">
                                        <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                        </use>
                                    </svg>)</span></div>
                            <div>Income</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0 text-white" data-coreui-toggle="dropdown" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                    </use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="{{ url('#') }}">Action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Another action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mx-3 mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-warning mb-4 text-white">
                    <div class="card-body d-flex justify-content-between align-items-start pb-0">
                        <div>
                            <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                    <svg class="icon">
                                        <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-arrow-top">
                                        </use>
                                    </svg>)</span></div>
                            <div>Conversion Rate</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0 text-white" data-coreui-toggle="dropdown" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                    </use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="{{ url('#') }}">Action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Another action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card bg-danger mb-4 text-white">
                    <div class="card-body d-flex justify-content-between align-items-start pb-0">
                        <div>
                            <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                    <svg class="icon">
                                        <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom">
                                        </use>
                                    </svg>)</span></div>
                            <div>Sessions</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent p-0 text-white" data-coreui-toggle="dropdown" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                    </use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="{{ url('#') }}">Action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Another action</a><a class="dropdown-item"
                                    href="{{ url('#') }}">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mx-3 mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-medium-emphasis">January - July 2022</div>
                    </div>
                    <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                        <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                            <input class="btn-check" id="option1" name="options" type="radio" autocomplete="off">
                            <label class="btn btn-outline-secondary"> Day</label>
                            <input class="btn-check" id="option2" name="options" type="radio" autocomplete="off"
                                checked="">
                            <label class="btn btn-outline-secondary active"> Month</label>
                            <input class="btn-check" id="option3" name="options" type="radio" autocomplete="off">
                            <label class="btn btn-outline-secondary"> Year</label>
                        </div>
                        <button class="btn btn-primary" type="button">
                            <svg class="icon">
                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-cloud-download">
                                </use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                    <canvas class="chart" id="main-chart" height="300"></canvas>
                </div>
            </div>
            <div class="card-footer">
                <div class="row row-cols-1 row-cols-md-5 text-center">
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Visits</div>
                        <div class="fw-semibold">29.703 Users (40%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Unique</div>
                        <div class="fw-semibold">24.093 Users (20%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                aria-valuemax="100" style="width: 20%"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Pageviews</div>
                        <div class="fw-semibold">78.706 Views (60%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">New Users</div>
                        <div class="fw-semibold">22.123 Users (80%)</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="col mb-sm-2 mb-0">
                        <div class="text-medium-emphasis">Bounce Rate</div>
                        <div class="fw-semibold">40.15%</div>
                        <div class="progress progress-thin mt-2">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card.mb-4-->
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                    <div class="card-header position-relative d-flex justify-content-center align-items-center">
                        <svg class="icon icon-3xl my-4 text-white">
                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-facebook-f">
                            </use>
                        </svg>
                        <div class="chart-wrapper position-absolute w-100 h-100 start-0 top-0">
                            <canvas id="social-box-chart-1" height="90"></canvas>
                        </div>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <div class="fs-5 fw-semibold">89k</div>
                            <div class="text-uppercase text-medium-emphasis small">friends</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <div class="fs-5 fw-semibold">459</div>
                            <div class="text-uppercase text-medium-emphasis small">feeds</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
                    <div class="card-header position-relative d-flex justify-content-center align-items-center">
                        <svg class="icon icon-3xl my-4 text-white">
                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-twitter">
                            </use>
                        </svg>
                        <div class="chart-wrapper position-absolute w-100 h-100 start-0 top-0">
                            <canvas id="social-box-chart-2" height="90"></canvas>
                        </div>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <div class="fs-5 fw-semibold">973k</div>
                            <div class="text-uppercase text-medium-emphasis small">followers</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <div class="fs-5 fw-semibold">1.792</div>
                            <div class="text-uppercase text-medium-emphasis small">tweets</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-lg-4">
                <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
                    <div class="card-header position-relative d-flex justify-content-center align-items-center">
                        <svg class="icon icon-3xl my-4 text-white">
                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-linkedin">
                            </use>
                        </svg>
                        <div class="chart-wrapper position-absolute w-100 h-100 start-0 top-0">
                            <canvas id="social-box-chart-3" height="90"></canvas>
                        </div>
                    </div>
                    <div class="card-body row text-center">
                        <div class="col">
                            <div class="fs-5 fw-semibold">500+</div>
                            <div class="text-uppercase text-medium-emphasis small">contacts</div>
                        </div>
                        <div class="vr"></div>
                        <div class="col">
                            <div class="fs-5 fw-semibold">292</div>
                            <div class="text-uppercase text-medium-emphasis small">feeds</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-header">Traffic &amp; Sales</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="border-start border-start-4 border-start-info mb-3 px-3">
                                            <small class="text-medium-emphasis">New Clients</small>
                                            <div class="fs-5 fw-semibold">9.123</div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-6">
                                        <div class="border-start border-start-4 border-start-danger mb-3 px-3">
                                            <small class="text-medium-emphasis">Recuring Clients</small>
                                            <div class="fs-5 fw-semibold">22.643</div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <hr class="mt-0">
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Monday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="34"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 34%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="78"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Tuesday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="56"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="94"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 94%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Wednesday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="12"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 12%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="67"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 67%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Thursday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="43"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 43%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="91"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 91%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Friday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="22"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="73"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 73%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Saturday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="53"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 53%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="82"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 82%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-4">
                                    <div class="progress-group-prepend"><span
                                            class="text-medium-emphasis small">Sunday</span></div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="9"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 9%"></div>
                                        </div>
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="69"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="border-start border-start-4 border-start-warning mb-3 px-3">
                                            <small class="text-medium-emphasis">Pageviews</small>
                                            <div class="fs-5 fw-semibold">78.623</div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                    <div class="col-6">
                                        <div class="border-start border-start-4 border-start-success mb-3 px-3">
                                            <small class="text-medium-emphasis">Organic</small>
                                            <div class="fs-5 fw-semibold">49.123</div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- /.row-->
                                <hr class="mt-0">
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user">
                                            </use>
                                        </svg>
                                        <div>Male</div>
                                        <div class="fw-semibold ms-auto">43%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 43%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group mb-5">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use
                                                xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-user-female">
                                            </use>
                                        </svg>
                                        <div>Female</div>
                                        <div class="fw-semibold ms-auto">37%</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="43"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 43%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-google">
                                            </use>
                                        </svg>
                                        <div>Organic Search</div>
                                        <div class="fw-semibold me-2 ms-auto">191.235</div>
                                        <div class="text-medium-emphasis small">(56%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="56"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use
                                                xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-facebook-f">
                                            </use>
                                        </svg>
                                        <div>Facebook</div>
                                        <div class="fw-semibold me-2 ms-auto">51.223</div>
                                        <div class="text-medium-emphasis small">(15%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="15"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-twitter">
                                            </use>
                                        </svg>
                                        <div>Twitter</div>
                                        <div class="fw-semibold me-2 ms-auto">37.564</div>
                                        <div class="text-medium-emphasis small">(11%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="11"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 11%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <div class="progress-group-header">
                                        <svg class="icon icon-lg me-2">
                                            <use
                                                xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-linkedin">
                                            </use>
                                        </svg>
                                        <div>LinkedIn</div>
                                        <div class="fw-semibold me-2 ms-auto">27.319</div>
                                        <div class="text-medium-emphasis small">(8%)</div>
                                    </div>
                                    <div class="progress-group-bars">
                                        <div class="progress progress-thin">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="8"
                                                aria-valuemin="0" aria-valuemax="100" style="width: 8%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-->
                        </div>
                        <!-- /.row--><br>
                        <div class="table-responsive">
                            <table class="mb-0 table border">
                                <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                        <th class="text-center">
                                            <svg class="icon">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-people">
                                                </use>
                                            </svg>
                                        </th>
                                        <th>User</th>
                                        <th class="text-center">Country</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment Method</th>
                                        <th>Activity</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/1.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-success"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Yiorgos Avraamu</div>
                                            <div class="small text-medium-emphasis"><span>New</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-us">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">50%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 50%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">10 sec ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/2.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-danger"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Avram Tarasios</div>
                                            <div class="small text-medium-emphasis"><span>Recurring</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-br">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">10%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-visa">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">5 minutes ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/3.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-warning"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Quintin Ed</div>
                                            <div class="small text-medium-emphasis"><span>New</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-in">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">74%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10,
                                                        2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 74%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">1 hour ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/4.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-secondary"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Enéas Kwadwo</div>
                                            <div class="small text-medium-emphasis"><span>New</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-fr">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">98%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10,
                                                        2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="98"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 98%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last month</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/5.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-success"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Agapetus Tadeáš</div>
                                            <div class="small text-medium-emphasis"><span>New</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-es">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">22%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10,
                                                        2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="22"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last week</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                    src="{{ asset('assets/admin/assets/img/avatars/6.jpg') }}"
                                                    alt="user@email.com"><span class="avatar-status bg-danger"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Friderik Dávid</div>
                                            <div class="small text-medium-emphasis"><span>New</span> |
                                                Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="assets/admin/vendors/@coreui/icons/svg/flag.svg#cif-pl">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">43%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun
                                                        11, 2020 - Jul 10,
                                                        2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 43%"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="assets/admin/vendors/@coreui/icons/svg/brand.svg#cib-cc-amex">
                                                </use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Yesterday</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" data-coreui-toggle="dropdown"
                                                    type="button" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="assets/admin/vendors/@coreui/icons/svg/free.svg#cil-options">
                                                        </use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                        href="{{ url('#') }}">Info</a><a class="dropdown-item"
                                                        href="{{ url('#') }}">Edit</a><a
                                                        class="dropdown-item text-danger"
                                                        href="{{ url('#') }}">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
@endsection
