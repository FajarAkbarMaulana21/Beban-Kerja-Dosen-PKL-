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
                        <h3 class="card-title">Ubah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('kinerja-penunjang.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="penunjang_id">Sub Unsur</label>
                                <select name="penunjang_id" class="form-control" id="penunjang_id">
                                    <option disabled>-- Pilih --</option>
                                    @foreach ($penunjang as $item)
                                    <option value="{{$item->id}}" {{$item->id == $data->id_subkegiatan ? 'selected' : ''}}>{{$item->kode_penunjang}}. {{$item->nama_penunjang}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="namasub">Kegiatan</label>
                                <select name="namasub" class="form-control" id="namasub">
                                    <option value="{{$data->nama_kegiatan}}">{{$data->nama_kegiatan}}</option>
                            </select>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="semester">Semester</label>
                                    <select name="semester" class="form-control" id="semester">
                                        <option holder>-- Pilih --</option>
                                        <option value="Semester Ganjil" {{$data->semester == 'Semester Ganjil' ? 'selected' : ''}}>Semester Ganjil</option>
                                        <option value="Semester Genap" {{$data->semester == 'Semester Genap' ? 'selected' : ''}}>Semester Genap</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="tahun_akademik">Tahun Akademik</label>
                                    <select name="tahun_akademik" class="form-control" id="tahun_akademik">
                                        <option holder>-- Pilih --</option>
                                        <option value="2017/2018" {{$data->tahun_akademik == '2017/2018' ? 'selected' : ''}}>2017/2018</option>
                                        <option value="2018/2019" {{$data->tahun_akademik == '2018/2019' ? 'selected' : ''}}>2018/2019</option>
                                        <option value="2019/2020" {{$data->tahun_akademik == '2019/2020' ? 'selected' : ''}}>2019/2020</option>
                                        <option value="2020/2021" {{$data->tahun_akademik == '2020/2021' ? 'selected' : ''}}>2020/2021</option>
                                        <option value="2021/2022" {{$data->tahun_akademik == '2021/2022' ? 'selected' : ''}}>2021/2022</option>
                                        <option value="2022/2023" {{$data->tahun_akademik == '2022/2023' ? 'selected' : ''}}>2022/2023</option>
                                        <option value="2023/2024" {{$data->tahun_akademik == '2023/2024' ? 'selected' : ''}}>2023/2024</option>
                                        <option value="2024/2025" {{$data->tahun_akademik == '2024/2025' ? 'selected' : ''}}>2024/2025</option>
                                    </select>
                                </div>
                                {{-- <input type="text" class="form-control" name="masa_penugasan" value="{{old('masa_penugasan')}}" id="masa_penugasan" autocomplete="off" placeholder="Inputkan Masa Penugasan..."> --}}
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                    <input type="date" name="tgl_mulai" id="tgl_mulai"
                                    value="{{old('tgl_mulai') ? old('tgl_mulai') : $data->tgl_mulai}}"
                                    class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="tgl_selesai">Tanggal Selesai</label>
                                    <input type="date" name="tgl_selesai" id="tgl_selesai"
                                    value="{{old('tgl_selesai') ? old('tgl_selesai') : $data->tgl_selesai}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sks_penugasan">SATUAN KREDIT SEMESTER (SKS)</label>
                                <input type="text" class="form-control" name="sks_beban_kerja"
                                    id="sks_beban_kerja" value="{{old('sks_beban_kerja') ? old('sks_beban_kerja') : $data->sks_beban_kerja}}" required
                                    placeholder="Jumlah SKS">
                            </div>
                            <div class="form-group">
                                <label for="namafile">File Yang Sudah Diupload</label>
                                @foreach (json_decode($data->filenames) as $item){
                                    <a href="{{asset('/doc/penunjang/'.$item)}}" download="">Download</a>
                                }
                                @endforeach
                            </div>

                            <div class="form-group">
                                <fieldset class="border py-3 px-4">
                                    <legend class="w-100 border-bottom" style="font-weight: 500">Upload Bukti Penugasan/Bukti Dokumen</legend>
                                    <br>
                                            <div class="input-group xpress control-group lst increment">
                                                <input type="file" id="bukti_penugasan" class="myfile form-control" name="bukti_penugasan[]">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>

                                        <div class="clone d-none">
                                            <div class="xpress control-group lst input-group" style="margin-top:10px">
                                                <input type="file" id="bukti_penugasan" class="myfile form-control" name="bukti_penugasan[]">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger" type="button"><i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                </fieldset>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">Ubah</button>
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

@push('after-script')
<script>
    $(function(){
    $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $(function(){
        $('#penunjang_id').on('change', function(){
            let id_pengajuan = $('#penunjang_id').val();

            $.ajax({
                type : 'POST',
                url : "{{route('getSubkegiatan')}}",
                data : {id_pengajuan:id_pengajuan},
                cache : false,

                success: function(msg){
                    $('#namasub').html(msg);
                },
                error: function(data){
                    console.log('error:',data)
                },
            })
        })
    })
});
</script>

<script>
    $(document).ready(function(){
        $('.btn-success').click(function(){
            var htmlData = $('.clone').html();
            $('.increment').after(htmlData);
        });
        $('body').on('click', '.btn-danger', function(){
            $(this).parents('.xpress').remove();
        });
    })
</script>
@endpush
</div>
@endsection
