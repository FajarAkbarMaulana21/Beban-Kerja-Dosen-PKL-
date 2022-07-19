@extends('layouts.adminapp')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0">Dasbor Dosen</h1> --}}
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Assesor</a></li>
                    <li class="breadcrumb-item active">Detail </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="card bg-light">
            <div class="card-header">
                <h3 class="card-title">Detail Data</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8">
                                <div class="info-box bg-light">
                                   <div class="table-responsive">
                                       <table class="table table-borderless">
                                            <tr>
                                                <th>NIP</th>
                                                <td style="width:0">:</td>
                                                <td>{{$detail->nip}}</td>
                                            </tr>
                                            <tr>
                                                <th>NAMA</th>
                                                <td style="width:0">:</td>
                                                <td>{{$detail->gelar_depan}} {{$detail->nama}} {{$detail->gelar_belakang}}</td>
                                            </tr>
                                            <tr>
                                                <th>EMAIL</th>
                                                <td style="width:0">:</td>
                                                <td>{{$detail->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>PERGURUAN TINGGI</th>
                                                <td style="width:0">:</td>
                                                <td>{{$detail->perguruan_tinggi}}</td>
                                            </tr>
                                       </table>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
        @endsection
