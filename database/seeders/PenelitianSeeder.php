<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\penelitian;

class PenelitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penelitian = new penelitian;
        $penelitian->kode_penelitian = "A";
        $penelitian->nama_penelitian = "Menghasilkan Karya Ilmiah";

        $penelitian1 = new penelitian;
        $penelitian1->kode_penelitian = "B";
        $penelitian1->nama_penelitian = "Menerjemahkan/menyadur buku ilmiah";

        $penelitian2 = new penelitian;
        $penelitian2->kode_penelitian = "C";
        $penelitian2->nama_penelitian = "Mengedit/menyunting karya ilmiah";

        $penelitian3 = new penelitian;
        $penelitian3->kode_penelitian = "D";
        $penelitian3->nama_penelitian = "Membuat rencana dan karya teknologi yang dipatenkan";

        $penelitian4 = new penelitian;
        $penelitian4->kode_penelitian = "E";
        $penelitian4->nama_penelitian = "Membuat rancangan dan karya teknologi dan karya seni pertunjukan/karya sastra";

        $penelitian->save();$penelitian1->save();$penelitian2->save();$penelitian3->save();$penelitian4->save();
    }
}
