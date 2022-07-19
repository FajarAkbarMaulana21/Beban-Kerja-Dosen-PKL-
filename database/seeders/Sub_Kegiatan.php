<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subkegiatan;

class Sub_Kegiatan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // A
        $sub = new Subkegiatan();
        $sub->id_penunjang = '1';
        $sub->subkegiatan = 'Sebagai Ketua/Wakil Ketua Merangkap Anggota';
        $sub->angka_kredit = '3';
        $sub1 = new Subkegiatan();
        $sub1->id_penunjang = '1';
        $sub1->subkegiatan = 'Sebagai Anggota';
        $sub1->angka_kredit = '2';

        // B
        $sub2 = new Subkegiatan();
        $sub2->id_penunjang = '2';
        $sub2->subkegiatan = 'Panitia Pusat: Ketua/Wakil Ketua';
        $sub2->angka_kredit = '3';
        $sub3= new Subkegiatan();
        $sub3->id_penunjang = '2';
        $sub3->subkegiatan = 'Panitia Pusat: Anggota';
        $sub3->angka_kredit = '2';
        $sub4 = new Subkegiatan();
        $sub4->id_penunjang = '2';
        $sub4->subkegiatan = 'Panitia Daerah: Ketua/Wakil Ketua';
        $sub4->angka_kredit = '2';
        $sub5 = new Subkegiatan();
        $sub5->id_penunjang = '2';
        $sub5->subkegiatan = 'Panitia Daerah: Anggota';
        $sub5->angka_kredit = '1';

        // C
        $sub6 = new Subkegiatan();
        $sub6->id_penunjang = '3';
        $sub6->subkegiatan = 'Tingkat Internasional: Pengurus';
        $sub6->angka_kredit = '2';
        $sub7 = new Subkegiatan();
        $sub7->id_penunjang = '3';
        $sub7->subkegiatan = 'Tingkat Internasional: Anggota Atas Permintaan';
        $sub7->angka_kredit = '1';
        $sub8 = new Subkegiatan();
        $sub8->id_penunjang = '3';
        $sub8->subkegiatan = 'Tingkat Internasional: Anggota';
        $sub8->angka_kredit = '0.5';

        $sub9 = new Subkegiatan();
        $sub9->id_penunjang = '3';
        $sub9->subkegiatan = 'Tingkat Nasional: Pengurus';
        $sub9->angka_kredit = '1.5';
        $sub10 = new Subkegiatan();
        $sub10->id_penunjang = '3';
        $sub10->subkegiatan = 'Tingkat Nasional: Anggota Atas Permintaan';
        $sub10->angka_kredit = '1';
        $sub11 = new Subkegiatan();
        $sub11->id_penunjang = '3';
        $sub11->subkegiatan = 'Tingkat Nasional: Anggota';
        $sub11->angka_kredit = '0.5';


        // D
        $sub12 = new Subkegiatan();
        $sub12->id_penunjang = '4';
        $sub12->subkegiatan = '-';
        $sub12->angka_kredit = '1';

        //  E
        $sub13 = new Subkegiatan();
        $sub13->id_penunjang = '5';
        $sub13->subkegiatan = 'Sebagai Ketua Delegasi';
        $sub13->angka_kredit = '3';
        $sub14 = new Subkegiatan();
        $sub14->id_penunjang = '5';
        $sub14->subkegiatan = 'Sebagai Anggota Delegasi';
        $sub14->angka_kredit = '2';

        // F
        $sub15 = new Subkegiatan();
        $sub15->id_penunjang = '6';
        $sub15->subkegiatan = 'Sebagai : Ketua';
        $sub15->angka_kredit = '3';
        $sub16 = new Subkegiatan();
        $sub16->id_penunjang = '6';
        $sub16->subkegiatan = 'Sebagai : Anggota';
        $sub16->angka_kredit = '2';

        $sub17 = new Subkegiatan();
        $sub17->id_penunjang = '6';
        $sub17->subkegiatan = 'Sebagai : Ketua';
        $sub17->angka_kredit = '2';
        $sub18 = new Subkegiatan();
        $sub18->id_penunjang = '6';
        $sub18->subkegiatan = 'Sebagai : Anggota';
        $sub18->angka_kredit = '1';

        // G
        $sub19 = new Subkegiatan();
        $sub19->id_penunjang = '7';
        $sub19->subkegiatan = 'Penghargaan/Tanda Jasa Satya Lancana Karya Satya : 30 (Tiga Puluh) Tahun';
        $sub19->angka_kredit = '3';
        $sub20 = new Subkegiatan();
        $sub20->id_penunjang = '7';
        $sub20->subkegiatan = 'Penghargaan/Tanda Jasa Satya Lancana Karya Satya : 20 (Dua Puluh) Tahun';
        $sub20->angka_kredit = '2';
        $sub21 = new Subkegiatan();
        $sub21->id_penunjang = '7';
        $sub21->subkegiatan = 'Penghargaan/Tanda Jasa Satya Lancana Karya Satya : 10 (Sepuluh) Tahun';
        $sub21->angka_kredit = '1';

        $sub22 = new Subkegiatan();
        $sub22->id_penunjang = '7';
        $sub22->subkegiatan = 'Memperoleh Penghargaan Lainnya : Tingkat Internasional';
        $sub22->angka_kredit = '5';
        $sub23 = new Subkegiatan();
        $sub23->id_penunjang = '7';
        $sub23->subkegiatan = 'Memperoleh Penghargaan Lainnya : Tingkat Nasional';
        $sub23->angka_kredit = '3';
        $sub24 = new Subkegiatan();
        $sub24->id_penunjang = '7';
        $sub24->subkegiatan = 'Memperoleh Penghargaan Lainnya : Tingkat Provinsi';
        $sub24->angka_kredit = '1';

        // H
        $sub25 = new Subkegiatan();
        $sub25->id_penunjang = '8';
        $sub25->subkegiatan = 'Buku SLTA atau Setingkat';
        $sub25->angka_kredit = '5';
        $sub26 = new Subkegiatan();
        $sub26->id_penunjang = '8';
        $sub26->subkegiatan = 'Buku SLTP atau Setingkat';
        $sub26->angka_kredit = '5';
        $sub27 = new Subkegiatan();
        $sub27->id_penunjang = '8';
        $sub27->subkegiatan = 'Buku SD atau Setingkat';
        $sub27->angka_kredit = '5';


        // I
        $sub28 = new Subkegiatan();
        $sub28->id_penunjang = '9';
        $sub28->subkegiatan = 'Tingkat Internasional';
        $sub28->angka_kredit = '5';
        $sub29 = new Subkegiatan();
        $sub29->id_penunjang = '9';
        $sub29->subkegiatan = 'Tingkat Nasional';
        $sub29->angka_kredit = '3';
        $sub30 = new Subkegiatan();
        $sub30->id_penunjang = '9';
        $sub30->subkegiatan = 'Tingkat Daerah/Lokal';
        $sub30->angka_kredit = '1';

        // J
        $sub31 = new Subkegiatan();
        $sub31->id_penunjang = '10';
        $sub31->subkegiatan = 'Pengurus Aktif';
        $sub31->angka_kredit = '1';
        $sub32 = new Subkegiatan();
        $sub32->id_penunjang = '10';
        $sub32->subkegiatan = 'Anggota Aktif';
        $sub32->angka_kredit = '0.75';

        $sub33 = new Subkegiatan();
        $sub33->id_penunjang = '10';
        $sub33->subkegiatan = 'Pengurus Aktif';
        $sub33->angka_kredit = '0.50';
        $sub34 = new Subkegiatan();
        $sub34->id_penunjang = '10';
        $sub34->subkegiatan = 'Anggota Aktif';
        $sub34->angka_kredit = '0.25';

        // K
        $sub35 = new Subkegiatan();
        $sub35->id_penunjang = '11';
        $sub35->subkegiatan = 'Menjadi Anggota tim penilai jabatan Akademik Dosen';
        $sub35->angka_kredit = '0.50';


        $sub->save();$sub1->save();$sub2->save();$sub3->save();$sub4->save();$sub5->save();$sub6->save();$sub7->save();
        $sub8->save();$sub9->save();$sub10->save();$sub11->save();$sub12->save();$sub13->save();$sub14->save();$sub15->save();
        $sub16->save();$sub17->save();$sub18->save();$sub19->save();$sub20->save();$sub21->save();$sub22->save();$sub23->save();
        $sub24->save();$sub25->save();$sub26->save();$sub27->save();$sub28->save();$sub29->save();$sub30->save();$sub31->save();
        $sub32->save();$sub33->save();$sub34->save();$sub35->save();





    }
}
