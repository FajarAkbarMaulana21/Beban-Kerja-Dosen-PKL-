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
                    <li class="breadcrumb-item"><a href="#">Penelitian</a></li>
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
                                           <tr class="border-bottom">
                                               <td colspan="3" class="text-right">  <div class="confirm">
                                                @if($data->rekomendasi == 'Diproses')
                                                <a href="{{route('sendtoassesorpenelitian', $data->id)}}" class="ml-3"><i class="fas fa-paper-plane mr-1"></i>Teruskan Ke Assesor</a>
                                                @endif
                                            </div></td>
                                           </tr>
                                            <tr>
                                                <th>Nama Dosen</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->dosen->nama_depan}} {{$data->dosen->nama_belakang}}</td>
                                            </tr>
                                            <tr>
                                                <th>NIDN</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->dosen->nidn}}</td>
                                            </tr>
                                            <tr>
                                                <th>NIP</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->dosen->nip}}</td>
                                            </tr>
                                            <tr>
                                                <th>Unsur</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->unsurp->nama_penelitian}}</td>
                                            </tr>
                                            <tr>
                                                <th>Sub Kegiatan</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->nama_kegiatan}}</td>
                                            </tr>
                                            <tr>
                                                <th>SATUAN KREDIT SEMESTER (SKS)</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->sks_beban_kerja}}</td>
                                            </tr>
                                            <tr>
                                                <th>SEMESTER</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->semester}}</td>
                                            </tr>
                                            <tr>
                                                <th>TAHUN AKADEMIM</th>
                                                <td style="width:0">:</td>
                                                <td>{{$data->tahun_akademik}}</td>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL MULAI</th>
                                                <td style="width:0">:</td>
                                                <td>{{date('d-F-Y',STRTOTIME($data->tgl_mulai))}}</td>
                                            </tr>
                                            <tr>
                                                <th>TANGGAL AKHIR</th>
                                                <td style="width:0">:</td>
                                                <td>{{date('d-F-Y',STRTOTIME($data->tgl_selesai))}}</td>
                                            </tr>
                                            <tr>
                                                <th>Rekomendasi</th>
                                                <td style="width:0">:</td>
                                                <td>

                                                    @if ($data->rekomendasi == 'Diproses')
                                                    <div class="badge badge-primary p-2">Diproses</div>
                                                    @elseif($data->rekomendasi == 'Diteruskan')
                                                    <div class="badge badge-primary p-2">Diteruskan</div>
                                                    @elseif($data->rekomendasi == 'Diperiksa')
                                                    <div class="badge badge-primary p-2">Diperiksa</div>
                                                    @elseif($data->rekomendasi == 'Selesai')
                                                    <div class="badge badge-success p-2">Selesai</div>
                                                    @elseif($data->rekomendasi == 'Lanjutkan')
                                                    <div class="badge badge-warning p-2">Lanjutkan</div>
                                                    @elseif($data->rekomendasi == 'Gagal')
                                                    <div class="badge badge-danger p-2">Gagal</div>
                                                    @elseif($data->rekomendasi == 'Beban Lebih')
                                                    <div class="badge badge-warning p-2">Beban Lebih</div>
                                                    @endif

                                                </td>
                                            </tr>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>File Upload</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <td>
                                                        @foreach (json_decode($data->filenames) as $item)
                                                            {{-- <a class="btn btn-primary mb-1 text-white" href="{{asset('/doc/penelitian/'.$item)}}" download="" style="font-size:12px"><i class="fas fa-file mr-1"> {{$item}}</i></a> --}}
                                                        <a class="btn btn-primary mb-1 text-white" href="#" style="font-size:12px"><i class="fas fa-file mr-1"> {{$item}}</i></a>
                                                            @endforeach

                                                    </td>
                                                </tbody>
                                            </table>
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
