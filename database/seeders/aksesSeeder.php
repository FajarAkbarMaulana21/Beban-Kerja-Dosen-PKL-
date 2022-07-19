<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\dosen;

class aksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id = mt_rand('1','1000');

        $user = new User;
        $user->name = 'Admin';
        $user->username = 'Admin';
        $user->email = 'Admin@gmail.com';
        $user->level = 'Admin';
        $user->email_verified_at = NULL;
        $user->password = hash::make('12345678');

        $user->save();

        // dosen
        $user1 = new User;
        $dosid1 = $user1->id = $id;
        $user1->name = 'Nahdi Saubari';
        $user1->username = 'nahdisaubari';
        $email1 = $user1->email = 'nahdisaubari@umbjm.ac.id';
        $user1->level = 'Dosen';
        $user1->email_verified_at = NULL;
        $user1->password = hash::make('12345678');

        $dosen = new dosen;
        $dosen->foto = '';
        $dosen->nama_depan = '';
        $dosen->nama_belakang = '';
        $dosen->email = $email1;
        $dosen->jabatan = '';
        $dosen->tempat = '';
        $dosen->tgl_lhir = NOW();
        $dosen->nidn = '';
        $dosen->nip = '';
        $dosen->jenis = '';
        $dosen->gelar_depan = '';
        $dosen->gelar_belakang = '';
        $dosen->golongan = '';
        $dosen->id_user = $dosid1;

        $user1->save();
        $dosen->save();

        // // dosen
        // $user2 = new User;
        // $dosid2 = $user2->id = $id;
        // $user2->name = 'Mukhaimy';
        // $user2->username = 'Mukhaimy';
        // $email2 = $user2->email = 'mukhaimygazali@umbjm.ac.id';
        // $user2->level = 'Dosen';
        // $user2->email_verified_at = NULL;
        // $user2->password = hash::make('12345678');

        // $dosen1 = new dosen;
        // $dosen1->foto = '';
        // $dosen1->nama_depan = '';
        // $dosen1->nama_belakang = '';
        // $dosen1->email = $email2;
        // $dosen1->jabatan = '';
        // $dosen1->tempat = '';
        // $dosen1->tgl_lhir = NOW();
        // $dosen1->nidn = '';
        // $dosen1->nip = '';
        // $dosen1->jenis = '';
        // $dosen1->gelar_depan = '';
        // $dosen1->gelar_belakang = '';
        // $dosen1->golongan = '';
        // $dosen1->id_user = $dosid2;

        // $user2->save();
        // $dosen1->save();

        // // dosen
        // $user3 = new User;
        // $dosid3 = $user3->id = $id;
        // $user3->name = 'Muhammad Ziki';
        // $user3->username = 'Muhammad Ziki';
        // $email3 = $user3->email = 'zikielfirman@umbjm.ac.id';
        // $user3->level = 'Dosen';
        // $user3->email_verified_at = NULL;
        // $user3->password = hash::make('12345678');

        // $dosen2 = new dosen;
        // $dosen2->foto = '';
        // $dosen2->nama_depan = '';
        // $dosen2->nama_belakang = '';
        // $dosen2->email = $email3;
        // $dosen2->jabatan = '';
        // $dosen2->tempat = '';
        // $dosen2->tgl_lhir = NOW();
        // $dosen2->nidn = '';
        // $dosen2->nip = '';
        // $dosen2->jenis = '';
        // $dosen2->gelar_depan = '';
        // $dosen2->gelar_belakang = '';
        // $dosen2->golongan = '';
        // $dosen2->id_user = $dosid3;

        // $user3->save();
        // $dosen2->save();
    }
}
