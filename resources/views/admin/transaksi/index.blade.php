@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Transaksi</h4>
                            <a href="/create/transaksi">
                                <button class="btn btn-primary mb-3">Tambah Transaksi</button>
                            </a>

                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th>No Invoice</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Customer</th>
                                            <th>Produk</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>001</td>
                                            <td>15</td>
                                            <td>20.00</td>
                                            <td>user1</td>
                                            <td>Kiloan</td>
                                            <td>15.000</td>
                                            <td><button class="btn mb-1 btn-rounded btn-danger">Belum
                                                    Lunas</button></td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
                    Content body end
                ***********************************-->


        <!--**********************************
                    Footer start
                ***********************************-->
        <!--**********************************
                    Footer end
                    ***********************************-->
        {{-- <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab">Quixlab</a>
                        2018</p>
                </div>
            </div> --}}
    </div>
@endsection
