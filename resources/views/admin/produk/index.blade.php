@extends('admin.layouts.index')

@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Produk</a></li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Produk</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kiloan</td>
                                            <td>5.000</td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>boneka</td>
                                            <td>7.000</td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Karpet</td>
                                            <td>15.000</td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Setrika</td>
                                            <td>2.000</td>
                                            <td><span><a href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a
                                                        href="#" data-toggle="tooltip" data-placement="top"
                                                        title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>One Day Service</td>
                                            <td>15.000</td>
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
        </div>
    </div>
@endsection
