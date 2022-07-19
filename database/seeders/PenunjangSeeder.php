<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\penunjang;

class PenunjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penunjang = new penunjang;
        $penunjang->kode_penunjang = "A";
        $penunjang->nama_penunjang = "Menjadi Anggota Dalam Suatu Panitia/Badan Pada Perguruan Tiggi";

        $penunjang1 = new penunjang;
        $penunjang1->kode_penunjang = "B";
        $penunjang1->nama_penunjang = "Menjadi Anggota Panitia/Badan Pada Lembaga Pemerintahan";

        $penunjang2 = new penunjang;
        $penunjang2->kode_penunjang = "C";
        $penunjang2->nama_penunjang = "Menjadi Anggota Organisasi Profesi Dosen";

        $penunjang3 = new penunjang;
        $penunjang3->kode_penunjang = "D";
        $penunjang3->nama_penunjang = "Mewakili Perguruan Tinggi/Lembaga Pemerintah";

        $penunjang4 = new penunjang;
        $penunjang4->kode_penunjang = "E";
        $penunjang4->nama_penunjang = "Menjadi Anggota Delegasi Nasional Ke Pertemuan Internasional";

        $penunjang5 = new penunjang;
        $penunjang5->kode_penunjang = "F";
        $penunjang5->nama_penunjang = "Berperan Serta Aktif Dalam Pertemuan Ilmiah";

        $penunjang6 = new penunjang;
        $penunjang6->kode_penunjang = "G";
        $penunjang6->nama_penunjang = "Mendapat Penghargaan/Tanda Jasa";

        $penunjang7 = new penunjang;
        $penunjang7->kode_penunjang = "H";
        $penunjang7->nama_penunjang = "Menulis Buku Pembelajaran SMTA Ke Bawah Yang Diterbitkan dan Diedarkan Secara Nasional";

        $penunjang8 = new penunjang;
        $penunjang8->kode_penunjang = "I";
        $penunjang8->nama_penunjang = "Mempunyai Prestasi Dibidang Olahraga/Humaniora";

        $penunjang9 = new penunjang;
        $penunjang9->kode_penunjang = "J";
        $penunjang9->nama_penunjang = "Keanggotaan Dalam Organisasi Profesi Dosen";

        $penunjang10 = new penunjang;
        $penunjang10->kode_penunjang = "K";
        $penunjang10->nama_penunjang = "Keanggotaan Dalam Tim Penilaian";

        $penunjang->save();$penunjang1->save();$penunjang2->save();$penunjang3->save();$penunjang4->save();
        $penunjang5->save();$penunjang6->save();$penunjang7->save();$penunjang8->save();$penunjang9->save();
        $penunjang10->save();
    }
}
