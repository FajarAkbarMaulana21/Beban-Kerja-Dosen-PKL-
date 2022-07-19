@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1>Kinerja Penunjang</h1> --}}
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
                            <h3 class="card-title mt-1">Kinerja Penelitian</h3>
                            <div class="btn-tmbh float-right">
                                <a href="{{route('kinerja-penelitian.create')}}" class="btn btn-primary btn-sm"><i
                                        class="fas fa-plus"></i>Tambah</a>
                            </div>
                        </div>
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
                                                    <th>No#</th>
                                                    <th>Sub Unsur</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Semester</th>
                                                    <th>Tahun Akademik</th>
                                                    <th>Tanggal Selesai</th>
                                                    <th>Rekomendasi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($indx as $item)
                                                <tr class="text-center">
                                                    <td style="vertical-align:middle;">{{$loop->iteration}}</td>
                                                    <td style="vertical-align:middle;width:20%">
                                                        {{$item->unsurp->nama_penelitian}}</td>
                                                    <td style="vertical-align:middle">{{$item->nama_kegiatan}}</td>
                                                    <td style="vertical-align:middle;width:10%">
                                                        {{$item->semester}}</td>
                                                    <td style="vertical-align:middle;width:10%">
                                                        {{$item->tahun_akademik}}</td>
                                                    <td style="vertical-align:middle;width:10%">
                                                        {{date('d-m-Y', STRTOTIME($item->tgl_selesai))}}</td>
                                                    <td style="vertical-align:middle"><span
                                                            class="btn btn-primary btn-sm">{{$item->rekomendasi}}</span>
                                                    </td>
                                                    <td style="vertical-align:middle">

                                                        <a href="{{route('kinerja-penelitian.edit', $item->id)}}"
                                                            class="btn btn-primary btn-sm"><i
                                                                class="fas fa-pen"></i></a>
                                                        <form
                                                            action="{{route('kinerja-penelitian.destroy', $item->id)}}"
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
