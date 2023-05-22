@extends('admin.app')

@section('content')

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12">

                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Ecommerce Dashboard</h4>
                            <div class="breadcrumb-action justify-content-center flex-wrap">
                                <div class="action-btn">

                                    <div class="form-group mb-0">
                                        <div class="input-container icon-left position-relative">
                                            <span class="input-icon icon-left">
                                                <span data-feather="calendar"></span>
                                            </span>
                                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                                            <span class="input-icon icon-right">
                                                <span data-feather="chevron-down"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-download"></i> Export
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <span class="dropdown-item">Export With</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-print"></i> Printer</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-pdf"></i> PDF</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-text"></i> Google Sheets</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-excel"></i> Excel (XLSX)</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-file-csv"></i> CSV</a>
                                    </div>
                                </div>
                                <div class="dropdown action-btn">
                                    <button class="btn btn-sm btn-default btn-white dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-share"></i> Share
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                                        <span class="dropdown-item">Share Link</span>
                                        <div class="dropdown-divider"></div>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-facebook"></i> Facebook</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-twitter"></i> Twitter</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-google"></i> Google</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-feed"></i> Feed</a>
                                        <a href="" class="dropdown-item">
                                            <i class="la la-instagram"></i> Instagram</a>
                                    </div>
                                </div>
                                <div class="action-btn">
                                    <a href="" class="btn btn-sm btn-primary btn-add">
                                        <i class="la la-plus"></i> Add New</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                        <!-- Card 1 -->
                        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                            <div>





                                <div class="overview-content">
                                    <h1>7,461</h1>
                                    <p>Orders</p>
                                    <div class="ap-po-details-time">
                                        <span class="color-success"><i class="las la-arrow-up"></i>
                                            <strong>25%</strong></span>
                                        <small>Since last week</small>
                                    </div>
                                </div>

                            </div>
                            <div class="ap-po-timeChart">
                                <div class="overview-single__chart d-md-flex align-items-end">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="mychart8"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 1 End -->
                    </div>
                    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                        <!-- Card 2 End  -->
                        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                            <div>





                                <div class="overview-content">
                                    <h1>$28,947</h1>
                                    <p>Revenue</p>
                                    <div class="ap-po-details-time">
                                        <span class="color-success"><i class="las la-arrow-up"></i>
                                            <strong>25%</strong></span>
                                        <small>Since last week</small>
                                    </div>
                                </div>

                            </div>
                            <div class="ap-po-timeChart">
                                <div class="overview-single__chart d-md-flex align-items-end">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="mychart9"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 End  -->
                    </div>
                    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                        <!-- Card 3 -->
                        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                            <div>





                                <div class="overview-content">
                                    <h1>$3,241</h1>
                                    <p>Avg. Order Value</p>
                                    <div class="ap-po-details-time">
                                        <span class="color-danger"><i class="las la-arrow-down"></i>
                                            <strong>25%</strong></span>
                                        <small>Since last week</small>
                                    </div>
                                </div>

                            </div>
                            <div class="ap-po-timeChart">
                                <div class="overview-single__chart d-md-flex align-items-end">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="mychart10"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 End -->
                    </div>
                    <div class="col-xxl-3 col-md-6 col-ssm-12 mb-30">
                        <!-- Card 1 -->
                        <div class="ap-po-details p-25 radius-xl bg-white d-flex justify-content-between">
                            <div>





                                <div class="overview-content">
                                    <h1>45.32k</h1>
                                    <p>Unique visitors</p>
                                    <div class="ap-po-details-time">
                                        <span class="color-success"><i class="las la-arrow-up"></i>
                                            <strong>35%</strong></span>
                                        <small>Since last week</small>
                                    </div>
                                </div>

                            </div>
                            <div class="ap-po-timeChart">
                                <div class="overview-single__chart d-md-flex align-items-end">
                                    <div class="parentContainer">


                                        <div>
                                            <canvas id="mychart11"></canvas>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 1 End -->
                    </div>

                </div>
                <!-- ends: .row -->
            </div>
@endsection