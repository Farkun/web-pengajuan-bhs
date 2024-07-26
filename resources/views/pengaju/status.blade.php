@extends('layout.main')

@section('sidebar')
<ul class="metismenu" id="menu">
    <ul class="metismenu" id="menu">
        <li class="nav-label">Dashboard</li>
            <li>
                <a href="{{ route('pengaju.dashboard') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pengaju.dana') }}">
                    <i class="icon-note menu-icon"></i><span class="nav-text">Ajukan Dana</span>
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
                                            <h5>Seluruh pengajuan yang sudah anda unggah ditampilkan pada halaman ini. </h5>
                                           
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
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal</th>
                                                    <th>Name</th>
                                                    <th>Dana pengajuan</th>
                                                    <th>Proses pengajuan</th>
                                                    <th>Status dana</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>2024-01-22</td>
                                                    <td>M. Budiman</td>
                                                    <td class="color-primary">Rp2.000.000</td>
                                                    <td><span class="badge badge-warning px-2">Dipending</span></td>
                                                    <td><span class="badge badge-secondary px-2">Belum cair</span></td>
                                                    <td>Lorem ipsum dolor sit amet....</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>2024-01-30</td> 
                                                    <td>M. Budiman</td>
                                                    <td class="color-success">Rp2.000.000</td>
                                                    <td><span class="badge badge-danger px-2">Ditolak</span></td>
                                                    <td><span class="badge badge-secondary px-2">Belum cair</span></td>
                                                    <td>Lorem ipsum dolor sit amet....</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>2024-01-25</td> 
                                                    <td>M. Budiman</td>
                                                    <td class="color-danger">Rp2.000.000</td>
                                                    <td><span class="badge badge-success px-2">Disetujui</span></td>
                                                    <td><span class="badge badge-success px-2">Sudah cair</span></td>
                                                    <td>Lorem ipsum dolor sit amet....</td>
                                                </tr>
                                                <tr>
                                                    <th>4</th>
                                                    <td>2024-01-08</td> 
                                                    <td>M. Budiman</td>
                                                    <td class="color-danger">Rp2.000.000</td>
                                                    <td><span class="badge badge-secondary px-2">Belum dibaca</span></td>
                                                    <td><span class="badge badge-secondary px-2">Belum cair</span></td>
                                                    <td>Lorem ipsum dolor sit amet....</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- #/ container -->
            </div>
                
                
        </div>   
@endsection

