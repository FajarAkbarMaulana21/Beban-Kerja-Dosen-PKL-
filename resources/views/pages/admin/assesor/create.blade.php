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
                    <form action="{{route('assesor.store')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="level" value="Assesor">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" value="{{ old('nip')}}" autocomplete="off" class="form-control" id="nip"
                                    required placeholder="Inputkan NIP Assesor...">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Assesor</label>
                                <input type="text" name="nama" value="{{ old('nama')}}" class="form-control" id="nama"
                                    required placeholder="Inputkan Nama Assesor...">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="gelar_depan">Gelar Depan</label>
                                    <input type="text" name="gelar_depan" value="{{ old('gelar_depan')}}"
                                        class="form-control" id="gelar_depan" required
                                        placeholder="Inputkan Gelar Depan Assesor...">
                                </div>
                                <div class="col-md-6">
                                    <label for="gelar_belakang">Gelar Belakang</label>
                                    <input type="text" name="gelar_belakang" value="{{ old('gelar_belakang')}}"
                                        class="form-control" id="gelar_belakang" required
                                        placeholder="Inputkan Gelar Belakang Assesor...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Assesor</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Inputkan Email Assesor..." required>
                            </div>
                            <div class="form-group">
                                <label for="perguruan_tinggi">Perguruan Tinggi</label>
                                <input type="text" name="perguruan_tinggi" class="form-control" id="perguruan_tinggi" placeholder="Inputkan Gelar Belakang Assesor..." required>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleInputPassword1" placeholder="Password">
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
