<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\subpenelitian;

class Sub_Penelitian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //A
        $sub = new subpenelitian();
        $sub->id_penelitian = '1';
        $sub->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan dalam bentuk : Monograf';
        $sub->angka_kredit = '20';

        $sub1 = new subpenelitian();
        $sub1->id_penelitian = '1';
        $sub1->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan dalam bentuk : Buku Referensi';
        $sub1->angka_kredit = '40';

        $sub2 = new subpenelitian();
        $sub2->id_penelitian = '1';
        $sub2->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Jurnal Ilmiah : Internasional Bereputasi';
        $sub2->angka_kredit = '40';

        $sub3 = new subpenelitian();
        $sub3->id_penelitian = '1';
        $sub3->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Jurnal Ilmiah : Internasional';
        $sub3->angka_kredit = '30';

        $sub4 = new subpenelitian();
        $sub4->id_penelitian = '1';
        $sub4->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Jurnal Ilmiah : Nasional Ter Akreditasi';
        $sub4->angka_kredit = '25';

        $sub5 = new subpenelitian();
        $sub5->id_penelitian = '1';
        $sub5->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Jurnal Ilmiah : Nasional';
        $sub5->angka_kredit = '10';

        $sub6 = new subpenelitian();
        $sub6->id_penelitian = '1';
        $sub6->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Seminar Disajikan tingkat : Internasional';
        $sub6->angka_kredit = '15';

        $sub7 = new subpenelitian();
        $sub7->id_penelitian = '1';
        $sub7->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Seminar Disajikan tingkat : Nasional';
        $sub7->angka_kredit = '10';

        $sub8 = new subpenelitian();
        $sub8->id_penelitian = '1';
        $sub8->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Poster tingkat : Internasional';
        $sub8->angka_kredit = '30';

        $sub9 = new subpenelitian();
        $sub9->id_penelitian = '1';
        $sub9->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Poster tingkat : Nasional';
        $sub9->angka_kredit = '10';

        $sub10 = new subpenelitian();
        $sub10->id_penelitian = '1';
        $sub10->subkegiatan = 'Hasil Penelitian atau pemikiran yang di publikasikan Dalam Koran/Majalah populer/umum';
        $sub10->angka_kredit = '1';

        $sub11 = new subpenelitian();
        $sub11->id_penelitian = '1';
        $sub11->subkegiatan = 'Hasil Penelitian atau pemikiran yang tidak dipublikasikan(tersimpan di perpustakaan perguruan tinggi)';
        $sub11->angka_kredit = '2';

        //B
        $sub12 = new subpenelitian();
        $sub12->id_penelitian = '2';
        $sub12->subkegiatan = 'Diterbitkan dan diedarkan secara nasional.';
        $sub12->angka_kredit = '15';

        //C
        $sub13 = new subpenelitian();
        $sub13->id_penelitian = '3';
        $sub13->subkegiatan = 'Diterbitkan dan diedarkan secara nasional.';
        $sub13->angka_kredit = '10';

        //D
        $sub14 = new subpenelitian();
        $sub14->id_penelitian = '4';
        $sub14->subkegiatan = 'Internasional';
        $sub14->angka_kredit = '60';

        $sub15 = new subpenelitian();
        $sub15->id_penelitian = '4';
        $sub15->subkegiatan = 'Nasional';
        $sub15->angka_kredit = '40';

        //E
        $sub16 = new subpenelitian();
        $sub16->id_penelitian = '5';
        $sub16->subkegiatan = 'Tingkat Internasional';
        $sub16->angka_kredit = '20';

        $sub17 = new subpenelitian();
        $sub17->id_penelitian = '5';
        $sub17->subkegiatan = 'Tingkat Nasional';
        $sub17->angka_kredit = '15';

        $sub18 = new subpenelitian();
        $sub18->id_penelitian = '5';
        $sub18->subkegiatan = 'Tingkat Lokal';
        $sub18->angka_kredit = '10';

        $sub->save();$sub1->save();$sub2->save();$sub3->save();$sub4->save();$sub5->save();$sub6->save();$sub7->save();
        $sub8->save();$sub9->save();$sub10->save();$sub11->save();$sub12->save();$sub13->save();$sub14->save();$sub15->save();
        $sub16->save();$sub17->save();$sub18->save();
    }
}
