
@extends('dashboard.layouts.app')

@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Dashboard</h4>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-xxl-4 col-md-6">
                <div class="card is-dark h-100">
                    <div class="nk-ecwg nk-ecwg1">
                        <div class="card-inner">
                            <div class="card-title-group">
                                <div class="card-title">
                                    <h6 class="title">Total Sales</h6>
                                </div>
                                <div class="card-tools">
                                    <a href="#" class="link">View Report</a>
                                </div>
                            </div>
                            <div class="data">
                                <div class="amount">$74,958.49</div>
                                <div class="info"><strong>$7,395.37</strong> in last month</div>
                            </div>
                            <div class="data">
                                <h6 class="sub-title">This week so far</h6>
                                <div class="data-group">
                                    <div class="amount">$1,338.72</div>
                                    <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                            <div class="nk-ecwg1-ck">
                                <canvas class="ecommerce-line-chart-s1" id="totalSales"></canvas>
                            </div>
                        </div>
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="nk-ecwg nk-ecwg2">
                        <div class="card-inner">
                            <div class="card-title-group mt-n1">
                                <div class="card-title">
                                    <h6 class="title">Averarge order</h6>
                                </div>
                                <div class="card-tools me-n1">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                <li><a href="#"><span>30 Days</span></a></li>
                                                <li><a href="#"><span>3 Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="data-group">
                                    <div class="amount">$463.35</div>
                                    <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                </div>
                            </div>
                            <h6 class="sub-title">Orders over time</h6>
                        </div><!-- .card-inner -->
                        <div class="nk-ecwg2-ck">
                            <canvas class="ecommerce-bar-chart-s1" id="averargeOrder"></canvas>
                        </div>
                    </div><!-- .nk-ecwg -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-4">
                <div class="row g-gs">
                    <div class="col-xxl-12 col-md-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg3">
                                <div class="card-inner pb-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Orders</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">329</div>
                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                    <div class="nk-ecwg3-ck">
                                        <canvas class="ecommerce-line-chart-s1" id="totalOrders"></canvas>
                                    </div>
                                </div>
                            </div><!-- .nk-ecwg -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                    <div class="col-xxl-12 col-md-6">
                        <div class="card">
                            <div class="nk-ecwg nk-ecwg3">
                                <div class="card-inner pb-2">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Customers</h6>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div class="amount">194</div>
                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                                <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                    <div class="nk-ecwg3-ck">
                                        <canvas class="ecommerce-line-chart-s1" id="totalCustomers"></canvas>
                                    </div>
                                </div>
                            </div><!-- .nk-ecwg -->
                        </div><!-- .card -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .col -->
            <div class="col-xxl-8">
                <div class="card card-full">
                    <div class="card-inner">
                        <div class="card-title-group">
                            <div class="card-title">
                                <h6 class="title">Recent Orders</h6>
                            </div>
                        </div>
                    </div>
                    <div class="nk-tb-list mt-n2">
                        <div class="nk-tb-item nk-tb-head">
                            <div class="nk-tb-col"><span>Order No.</span></div>
                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                            <div class="nk-tb-col"><span>Amount</span></div>
                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95954</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-purple-dim">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Abu Bin Ishtiyak</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/11/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">4,596.75 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95850</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-azure-dim">
                                        <span>DE</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Desiree Edwards</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/02/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">596.75 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95812</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-warning-dim">
                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Blanca Schultz</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">02/01/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">199.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95256</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-purple-dim">
                                        <span>NL</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Naomi Lawrence</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">01/29/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-success">Paid</span>
                            </div>
                        </div>
                        <div class="nk-tb-item">
                            <div class="nk-tb-col">
                                <span class="tb-lead"><a href="#">#95135</a></span>
                            </div>
                            <div class="nk-tb-col tb-col-sm">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-success-dim">
                                        <span>CH</span>
                                    </div>
                                    <div class="user-name">
                                        <span class="tb-lead">Cassandra Hogan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-tb-col tb-col-md">
                                <span class="tb-sub">01/29/2020</span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="tb-sub tb-amount">1099.99 <span>USD</span></span>
                            </div>
                            <div class="nk-tb-col">
                                <span class="badge badge-dot badge-dot-xs bg-warning">Due</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group mb-2">
                            <div class="card-title">
                                <h6 class="title">Top products</h6>
                            </div>
                            <div class="card-tools">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">Weekly</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><span>Daily</span></a></li>
                                            <li><a href="#" class="active"><span>Weekly</span></a></li>
                                            <li><a href="#"><span>Monthly</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nk-top-products">
                            <li class="item">
                                <div class="thumb">
                                    <img src="./images/product/a.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Pink Fitness Tracker</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="./images/product/b.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Purple Smartwatch</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="./images/product/c.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Black Mi Band Smartwatch</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="./images/product/d.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">Black Headphones</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="thumb">
                                    <img src="./images/product/e.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="title">iPhone 7 Headphones</div>
                                    <div class="price">$99.00</div>
                                </div>
                                <div class="total">
                                    <div class="amount">$990.00</div>
                                    <div class="count">10 Sold</div>
                                </div>
                            </li>
                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-3 col-md-6">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-title-group mb-2">
                            <div class="card-title">
                                <h6 class="title">Store Statistics</h6>
                            </div>
                        </div>
                        <ul class="nk-store-statistics">
                            <li class="item">
                                <div class="info">
                                    <div class="title">Orders</div>
                                    <div class="count">1,795</div>
                                </div>
                                <em class="icon bg-primary-dim ni ni-bag"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Customers</div>
                                    <div class="count">2,327</div>
                                </div>
                                <em class="icon bg-info-dim ni ni-users"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Products</div>
                                    <div class="count">674</div>
                                </div>
                                <em class="icon bg-pink-dim ni ni-box"></em>
                            </li>
                            <li class="item">
                                <div class="info">
                                    <div class="title">Categories</div>
                                    <div class="count">68</div>
                                </div>
                                <em class="icon bg-purple-dim ni ni-server"></em>
                            </li>
                        </ul>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-5 col-lg-6">
                <div class="card card-full overflow-hidden">
                    <div class="nk-ecwg nk-ecwg4 h-100">
                        <div class="card-inner flex-grow-1">
                            <div class="card-title-group mb-4">
                                <div class="card-title">
                                    <h6 class="title">Traffic Sources</h6>
                                </div>
                                <div class="card-tools">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">30 Days</a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><span>15 Days</span></a></li>
                                                <li><a href="#" class="active"><span>30 Days</span></a></li>
                                                <li><a href="#"><span>3 Months</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="data-group">
                                <div class="nk-ecwg4-ck">
                                    <canvas class="ecommerce-doughnut-s1" id="trafficSources"></canvas>
                                </div>
                                <ul class="nk-ecwg4-legends">
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#9cabff"></span>
                                            <span>Organic Search</span>
                                        </div>
                                        <div class="amount amount-xs">4,305</div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#ffa9ce"></span>
                                            <span>Referrals</span>
                                        </div>
                                        <div class="amount amount-xs">482</div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#b8acff"></span>
                                            <span>Social Media</span>
                                        </div>
                                        <div class="amount amount-xs">859</div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#f9db7b"></span>
                                            <span>Others</span>
                                        </div>
                                        <div class="amount amount-xs">138</div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .card-inner -->
                        <div class="card-inner card-inner-md bg-light">
                            <div class="card-note">
                                <em class="icon ni ni-info-fill"></em>
                                <span>Traffic channels have beed generating the most traffics over past days.</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div><!-- .col -->
            <div class="col-xxl-4 col-lg-6">
                <div class="card h-100">
                    <div class="nk-ecwg nk-ecwg5">
                        <div class="card-inner">
                            <div class="card-title-group align-start pb-3 g-2">
                                <div class="card-title">
                                    <h6 class="title">Store Visitors</h6>
                                </div>
                                <div class="card-tools">
                                    <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Users of this month"></em>
                                </div>
                            </div>
                            <div class="data-group">
                                <div class="data">
                                    <div class="title">Monthly</div>
                                    <div class="amount amount-sm">9.28K</div>
                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                </div>
                                <div class="data">
                                    <div class="title">Weekly</div>
                                    <div class="amount amount-sm">2.69K</div>
                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                </div>
                                <div class="data">
                                    <div class="title">Daily (Avg)</div>
                                    <div class="amount amount-sm">0.94K</div>
                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                </div>
                            </div>
                            <div class="nk-ecwg5-ck">
                                <canvas class="ecommerce-line-chart-s4" id="storeVisitors"></canvas>
                            </div>
                            <div class="chart-label-group">
                                <div class="chart-label">01 Jul, 2020</div>
                                <div class="chart-label">30 Jul, 2020</div>
                            </div>
                        </div>
                    </div>
                </div><!-- .card -->
            </div>
        </div><!-- .row -->
    </div><!-- .nk-block -->
</div>
@endsection