@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kinerja Penunjang</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Penunjang</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->

    <!-- Main content -->
    <div class="container-fluid mt-5">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('kinerja-penunjang.store')}}" method="POST" enctype="multipart/form-data">
                        @foreach ($dosen as $item)
                        <input type="hidden" name="id_dosen" value="{{$item->id}}">
                        @endforeach
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="jenis_kegiatan">Jenis Kegiatan</label>
                                <input type="text" name="jenis_kegiatan" class="form-control" id="jenis_kegiatan"
                                    value="{{old('jenis_kegiatan')}}" required placeholder="Jenis Kegiatan">
                            </div>

                            <div class="form-group">
                                <label for="penunjang_id">Penunjang</label>
                                <select name="penunjang_id" class="form-control" id="penunjang_id">
                                    <option holder>-- Pilih --</option>
                                    @foreach ($penunjang as $item)
                                    <option value="{{$item->id}}">{{$item->kode}}{{$item->nama_penunjang}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="masa_penugasan">Masa Penugasan</label>
                                <input type="text" name="nama_penugasan" id="masa_penugasan" class="form-control"
                                    value="{{old('masa_penugasan')}}" required placeholder="Masa Penugasan">
                            </div>

                            <div class="form-group">
                                <fieldset class="border py-3 px-4">
                                    <legend class="w-100 border-bottom" style="font-weight: 500">Beban Kerja</legend>
                                    <br>
                                    <div class="row bg-info p-2">
                                        <div class="col-md-6">
                                            <label for="bukti_penugasan">Bukti Penugasan</label>
                                            <input type="file" class="form-control-file" accept="image/*"
                                                name="bukti_penugasan">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sks_penugasan">SATUAN KREDIT SEMESTER (SKS)</label>
                                            <input type="text" class="form-control"
                                                style="width:100px;text-align:center" name="sks_beban_kerja"
                                                id="sks_beban_kerja" value="{{old('sks_beban_kerja')}}" required
                                                placeholder="Jumlah SKS">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <fieldset class="border py-3 px-4">
                                    <legend class="w-100 border-bottom" style="font-weight: 500">Kinerja</legend><br>
                                    <div class="row bg-info p-2">
                                        <div class="col-md-6">
                                            <label for="bukti_dokumen">Bukti Dokumen</label>
                                            <input type="file" class="form-control-file" accept="image/*"
                                                name="bukti_dokumen">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sks_kinerja">SATUAN KREDIT SEMESTER (SKS)</label>
                                            <input type="text" class="form-control"
                                                style="width:100px;text-align:center" name="sks_kinerja"
                                                id="sks_kinerja" value="{{old('sks_kinerja')}}" required
                                                placeholder="Jumlah SKS">
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->

</section>

</div>
@endsection
