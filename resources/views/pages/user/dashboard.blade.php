@extends('layouts.adminapp')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
       <div class="row mb-2">
           <div class="col-sm-6">
               <h1 class="m-0">Beranda</h1>
           </div>
       </div>
       <div class="welcome-message py-3">
           <p class="alert alert-success" style="font-size:18px;font-family:arial">Selamat Datang di <b>Laman Beban Kerja Dosen (BKD)</b>
        Universitas Muhammadiyah Banjarmasin</p>
       </div>

       <!-- /.row -->
       <div class="row">
        <div class="col-lg-4 col-4">
          <!-- small box -->
          <a href="{{route('kinerja-penelitian.index')}}">
            <div class="card text-center bg-light shadow">
                <div class="card-image-top py-3 text-white"><i class="fas fa-file text-primary" style="font-size: 100px"></i></div>
                <div class="card-footer"><strong style="font-size: 20px">Penelitian</strong></div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <a href="{{route('kinerja-penunjang.index')}}">
              <div class="card text-center bg-light shadow">
                  <div class="card-image-top py-3 text-white"><i class="fas fa-file text-secondary" style="font-size: 100px"></i></div>
                  <div class="card-footer"><strong style="font-size: 20px">Penunjang</strong></div>
              </div>
              </a>
          </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
   </div>
   <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
</section>
<!-- right col -->
@endsection
