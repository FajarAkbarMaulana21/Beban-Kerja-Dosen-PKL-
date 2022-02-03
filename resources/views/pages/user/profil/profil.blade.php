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
                    <li class="breadcrumb-item"><a href="#">Biodata</a></li>
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
            @foreach ($selectid as $item)
                <div class="button-edit text-right p-4">
                    <a href="{{route('profil.edit',$item->id)}}" class="btn btn-primary btn-sm">Edit Profil</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="body-foto text-center" style="width:100%">
                                        <img src="{{url($item->foto)}}" class="img-rounded shadow-sm" alt="" style="width:250px;height:250px">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="info-box bg-light">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                                <tr>
                                                    <th>NIDN</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->nidn}}</td>
                                                </tr>
                                                <tr>
                                                    <th>NIP</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->nip}}</td>
                                                </tr>
                                                <tr>
                                                    <th>NAMA DEPAN</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->nama_depan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>NAMA BELAKANG</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->nama_belakang}}</td>
                                                </tr>
                                                <tr>
                                                    <th>TEMPAT, TANGGAL LAHIR</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->tempat}},  {{\Carbon\Carbon::parse($item->tgl_lhir)->format('d/M/Y')}}</td>
                                                </tr>
                                                <tr>
                                                    <th>EMAIL</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>JABATAN</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->jabatan}}</td>
                                                </tr>
                                                <tr>
                                                    <th>JENIS</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->jenis}}</td>
                                                </tr>
                                                <tr>
                                                    <th>GELAR DEPAN</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->gelar_depan}}</td>
                                                    <th>GELAR BELAKANG</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->gelar_belakang}}</td>
                                                </tr>
                                                <tr>
                                                    <th>GOLONGAN</th>
                                                    <td style="width:0">:</td>
                                                    <td>{{$item->golongan}}</td>
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
            @endforeach
            <!-- /.container-fluid -->
        </div>
    </div>
        @endsection
