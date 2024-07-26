@extends('layout.main')

@section('sidebar')
<ul class="metismenu" id="menu">
    <li class="nav-label">Dashboard</li>
        <li>
            <a href="{{ route('pengaju.dashboard') }}">
                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengaju.dana') }}">
                <i class="icon-notebook menu-icon"></i><span class="nav-text">Ajukan Dana</span>
            </a>
        </li>
        <li>
            <a href="{{ route('pengaju.status') }}">
                <i class="icon-notebook menu-icon"></i><span class="nav-text">Status</span>
            </a>
        </li>
</ul>
@endsection

@section('content')
<div class="container-fluid mt-3">
    <h1>Dashboard</h1>
            <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h2 class="mb-1">Selamat Datang, Departemen Marketing</h2>
                                            <p>Total Earnings of the Month</p>
                                            <h3 class="m-0">$ 12,555</h3>
                                        </div>
                                        <div>
                                            <ul>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>
                                                <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>
                                                <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper" style="margin-left: 850px">
                                        <!-- <canvas id="chart_widget_2"></canvas> -->
                                         <img src="assets/theme/images/Illustration.png" alt="">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="w-100 mr-2">
                                                <h6>Pixel 2</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-danger" style="width: 40%"></div>
                                                </div>
                                            </div>
                                            <div class="ml-2 w-100">
                                                <h6>iPhone X</h6>
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<div class="container-fluid mt-3">
    <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card mt-3">
                                <button class="btn btn-primary mt-3 w-100">
                                    <div class="card mb-0">
                                        <div class="card-body p-0">
                                            <img src="assets/theme/images/status_pengaju.png"  alt="Placeholder Image">
                                        </div>
                                    </div>
                                </button>
                                
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

</div>
</div>
@endsection

