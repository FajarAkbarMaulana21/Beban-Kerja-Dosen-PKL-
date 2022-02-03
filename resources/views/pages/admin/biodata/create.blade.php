@extends('layouts.adminapp')

@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Biodata Dosen</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
            <li class="breadcrumb-item active">Biodata</li>
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
          <form action="{{route('biodata.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="level" value="Dosen">
              @csrf
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" value="{{ old('nama_depan')}}" class="form-control" id="nama_depan" required placeholder="Nama Depan">
                    </div>

                    <div class="col-md-6">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" value="{{ old('nama_depan')}}" class="form-control" id="nama_belakang" required placeholder="Nama Belakang">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" name="foto" name="{{old('foto')}}" accept="image/*" id="foto">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email"  value="{{ old('email')}}" class="form-control" id="email" required placeholder="Email">
                    </div>
                </div>
              <div class="form-group row">
              <div class="col-md-6">
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" class="form-control" id="jabatan" required>
                    <option selected>-- Pilih --</option>
                    <option value="Asisten Ahli">Asisten Ahli</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                    <option value="Profesor">Profesor</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="golongan">Golongan</label>
                <input type="text" name="golongan" value="{{ old('golongan')}}" class="form-control" id="golongan" required placeholder="Golongan">
              </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                <label for="tempat">Tempat Lahir</label>
                <input type="text" name="tempat" value="{{ old('tempat')}}" class="form-control" id="tempat" required>
              </div>
              <div class="col-md-6">
                <label for="tgl_lhir">Tanggal Lahir</label>
                <input type="date" name="tgl_lhir" value="{{ old('tgl_lhir')}}" class="form-control" id="tgl_lahir" required>
              </div>
            </div>
              <div class="form-group row">
              <div class="col-md-6">
                <label for="nidn">NIDN</label>
                <input type="text" name="nidn" value="{{ old('nidn')}}" class="form-control" id="nidn" required placeholder="NIDN">
              </div>

              <div class="col-md-6">
                <label for="nip">NIP</label>
                <input type="text" name="nip" value="{{ old('nip')}}" class="form-control" id="nip" required placeholder="NIP">
              </div>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select name="jenis" class="form-control" id="jenis" required>
                    <option holder>-- Pilih --</option>
                    <option value="Dosen Biasa">Dosen Biasa</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Dosen Dengan Tugas Tambahan">Dosen Dengan Tugas Tambahan</option>
                    <option value="Profesor Dengan Tugas Tambahan">Profesor Dengan Tugas Tambahan</option>
                </select>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="gelar_depan">Gelar Depan</label>
                <input type="text" name="gelar_depan" value="{{ old('gelar_depan')}}" class="form-control" id="gelar_depan" required placeholder="Gelar Depan">
              </div>

              <div class="col-md-6">
                <label for="gelar_belakang">Gelar Belakang</label>
                <input type="text" name="gelar_belakang" value="{{ old('gelar_belakang')}}" class="form-control" id="gelar_belakang" required placeholder="Gelar Belakang">
              </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
