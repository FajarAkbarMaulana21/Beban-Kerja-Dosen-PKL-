@extends('layouts.adminapp')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Penunjang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Penunjang</li>
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
                            <h3 class="card-title mt-1">Penunjang</h3>
                            <div class="btn-tmbh float-right">
                                {{-- <a href="{{route('penunjang.create')}}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-plus"></i>Tambah</a> --}}
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
                                                    <th>Semester</th>
                                                    <th>Tahun Akademik</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Rekomendasi</th>
                                                    <th>Aksi</th>
                                                    {{-- <th>Aksi</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($indx as $item)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td style="vertical-align:middle;text-align:center">
                                                        {{$item->dosen->nama_depan}} {{$item->dosen->nama_belakang}}
                                                    </td>
                                                    <td style="vertical-align:middle;text-align:left">
                                                        {{$item->unsur->nama_penunjang}}</td>
                                                    <td style="vertical-align:middle">{{$item->nama_kegiatan}}</td>
                                                        <td style="vertical-align:middle;width:10%">
                                                            {{$item->semester}}</td>
                                                        <td style="vertical-align:middle;width:10%">
                                                            {{$item->tahun_akademik}}</td>
                                                        <td style="vertical-align:middle;width:10%">
                                                            {{date('d-m-Y', STRTOTIME($item->tgl_selesai))}}</td>
                                                            <td style="vertical-align:middle;text-align:center">
                                                                @if ($item->rekomendasi == 'Diproses')
                                                               <div class="badge badge-primary p-2">Diproses</div>
                                                               @elseif($item->rekomendasi == 'Diteruskan')
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
                                                        @if($item->rekomendasi == 'Diproses')
                                                        <a href="{{route('sendtoassesorpenunjang', $item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-paper-plane"></i></a>
                                                        @endif
                                                        <a href="{{route('penunjang.show', $item->id)}}"
                                                            class="btn btn-secondary btn-sm"><i
                                                                class="fas fa-eye"></i></a>
                                                        <form action="{{route('penunjang.destroy', $item->id)}}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Yakin Ingin Hapus Data?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada Data</td>
                                                </tr>
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
