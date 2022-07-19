@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Assesor</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Assesor</li>
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
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <h3 class="card-title mt-1">Data Assesor</h3>
                            <div class="btn-tmbh float-right">
                                <a href="{{route('assesor.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>Tambah</a>
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
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Perguruan Tinggi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @forelse ($data as $item)
                                                    <tr>
                                                        <td style="vertical-align:middle">{{$loop->iteration}}</td>
                                                        <td style="vertical-align:middle">{{$item->nip}}</td>
                                                        <td style="vertical-align:middle">{{$item->gelar_depan}}{{$item->nama_belakang}}{{$item->gelar_belakang}}</td>
                                                        <td style="vertical-align:middle">{{$item->perguruan_tinggi}}</td>
                                                        <td style="vertical-align:middle">

                                                            {{-- <a href="{{route('assesor.edit', $item->id)}}" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a> --}}
                                                            <a href="{{route('assesor.show', $item->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-eye"></i></a>
                                                            <form action="{{route('assesor.destroy', $item->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus Data?')">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </form>
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

@push('before-script')
<script>
    $(function() {
        $("#exemple1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
        });
    });
</script>
@endpush

@endsection
