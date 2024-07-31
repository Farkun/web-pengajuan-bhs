@extends('layout.main')

@section('sidebar')
<ul class="metismenu" id="menu">
    <li class="nav-label">Status</li>
        <li>
            <a href="{{ route('approval.status') }}">
                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Status</span>
            </a>
        </li>
        <li>
            <a href="{{ route('approval.permintaan') }}">
                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
            </a>
        </li>
</ul>
@endsection

@section ('content')
<div class="container-fluid">
    <div class="col-13">
        <div class="card">
             <div class="card-body">
                <b>Berikut ini daftar surat pengajuan yang perlu Anda tanda tangani. Anda harus melakukan persetujuan untuk dapat menyetujui surat pengajuan.</b>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Nama Departemen</th>
                                                <th>Nama Pengaju</th>
                                                <th>Deskripsi</th>
                                                <th>Jumlah Pengajuan Dana</th>
                                                <th>Persetujuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>21/02/2025</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>Keperluan Pembangunan Server Ujian Online untuk mahasiswa PMB ajaran 2025/2026</td>
                                                <td>Rp 10.000.000,00</td>
                                                <td>
                                                    <div class="dropdown-menu"><a class="dropdown-item" href="#">Disetujui</a> <a class="dropdown-item" href="#">Ditolak</a> <a class="dropdown-item" href="#">Pending</a>
                                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Another link</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21/02/2025</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>Keperluan Pembangunan Server Ujian Online untuk mahasiswa PMB ajaran 2025/2026</td>
                                                <td>Rp 10.000.000,00</td>
                                                <td>ini kek mana cok</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Dropdown Divider</h4>
                                <p class="text-muted">The <code>.dropdown-divider</code> class is used to separate links inside the dropdown menu with a thin horizontal border</p>
                                <div class="basic-dropdown">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Dropdown button</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Link 1</a> <a class="dropdown-item" href="#">Link 2</a> <a class="dropdown-item" href="#">Link 3</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection

