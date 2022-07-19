@extends('layouts.adminapp')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Penelitian</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Penelitian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Penelitian</h3>
                            <div class="btn-tmbh float-right">
                                {{-- <a href="{{route('penelitian.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah</a> --}}
                            </div>
                        </div>
                        {{-- {{dd($indx)}} --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="biodata"
                                            class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Dosen</th>
                                                    <th>Unsur</th>
                                                    <th>Sub Kegiatan</th>
                                                    <th>Rekomendasi</th>
                                                    <th>Aksi</th>
                                                    {{-- <th>Aksi</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @forelse ($indx as $item)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td style="vertical-align:middle;text-align:center">{{$item->dosen->nama_depan}} {{$item->dosen->nama_belakang}}</td>
                                                        <td style="vertical-align:middle;text-align:left">{{$item->unsurp->nama_penelitian}}</td>
                                                        <td style="vertical-align:middle">{{$item->nama_kegiatan}}</td>
                                                        <td style="vertical-align:middle;text-align:center">
                                                        @if($item->rekomendasi == 'Diteruskan')
                                                        <div class="badge badge-primary p-2">Diteruskan</div>
                                                        @elseif($item->rekomendasi == 'Diperiksa')
                                                        <div class="badge badge-primary p-2">Diperiksa</div>
                                                        @elseif($item->rekomendasi == 'Selesai')
                                                        <div class="badge badge-success p-2">Selesai</div>
                                                        @elseif($item->rekomendasi == 'Lanjutkan')
                                                        <div class="badge badge-warning p-2">Lanjutkan</div>
                                                        @elseif($item->rekomendasi == 'Gagal')
                                                        <div class="badge badge-danger p-2">Gagal</div>
                                                        @elseif($item->rekomendasi == 'Beban Lebih')
                                                        <div class="badge badge-warning p-2">Beban Lebih</div>
                                                        @endif
                                                        </td>
                                                        <td style="vertical-align:middle">
                                                            <a href="{{route('data-penelitian.show', $item->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
                                                        </td>
                                                    </tr>
                                            @empty
                                                <tr><td colspan="7" class="text-center">Tidak Ada Data</td></tr>
                                            @endforelse
                                        </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</section>

</div>
@endsection
