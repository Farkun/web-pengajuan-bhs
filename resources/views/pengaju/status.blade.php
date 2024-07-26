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
    <h1>Status</h1>
            <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h3 class="mb-1">Informasi</h3>
                                            <h5>Di halaman ini Anda dapat mengajukan dana satu atau lebih. 
                                                Orang yang Anda minta untuk menyetujui pengajuan akan mendapat notifikasi untuk menyetujui pengajuan. </h5>
                                           
                                        </div>
                                        
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #/ container -->
            </div>
                
                
                
@endsection