@extends('admin.layouts.app')

@section('contents')
    <div class="container-lg px-4">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card text-white bg-primary">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                                    </svg>)</span></div>
                            <div>Users</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                    class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
                <div class="card text-white bg-info">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                                    </svg>)</span></div>
                            <div>Income</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                    class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
                <div class="card text-white bg-warning">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
                                    </svg>)</span></div>
                            <div>Conversion Rate</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                    class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                        <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
                <div class="card text-white bg-danger">
                    <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                        <div>
                            <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
                                    </svg>)</span></div>
                            <div>Sessions</div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                    class="dropdown-item" href="#">Something else here</a></div>
                        </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                        <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
       
    </div>
@endsection
