@extends('layout.main')

@section('logo')
<img src="assets/theme/images/logo-bhs.png" alt="">
@endsection

@section('sidebar')
<ul class="metismenu" id="menu">
    <li class="nav-label">Dashboard</li>
        <li>
            <a href="{{ route('superadmin.dashboard') }}">
                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('superadmin.daftarakun') }}">
                <i class="icon-notebook menu-icon"></i><span class="nav-text">Daftar Akun</span>
            </a>
        </li>
</ul>
@endsection

@section('content')
        <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Telp</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Farchan</td>
                                                <td>Chan@gmail.com</td>
                                                <td>087822314499</td>
                                                <td>Pengaju</td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Ucup</td>
                                                <td>Cup@gmail.com</td>
                                                <td>087822314499</td>
                                                <td>Approval</td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Dakmal</td>
                                                <td>Mal@gmail.com</td>
                                                <td>087822314499</td>
                                                <td>Accountant</td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Daffala</td>
                                                <td>Daf@gmail.com</td>
                                                <td>087822314499</td>
                                                <td>Bendahara</td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Telp</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="general-button" style="margin-left: 1070px">
                                <a href="{{ route('superadmin.tambahakun') }}"><button type="button" class="btn mb-1 btn-primary">Tambah Akun</button></a>
                            <br><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection