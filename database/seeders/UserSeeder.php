<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Akses Admin
        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('1234'),
        ]);
        $admin->attachRole('admin');

        //Akses Petugas
        $petugas = User::create([
            'name' => 'Petugas1',
            'username' => 'petugas_1',
            'password' => bcrypt('1234'),
            'telp' => '05615601223'
        ]);
        $petugas->attachRole('petugas');

        //Akses Masyarakat
        $masyarakat = User::create([
            'nik' => '6171021408020003',
            'name' => 'Hafiz Putra Pratama',
            'username' => 'hfzptr14',
            'password' => bcrypt('1234'),
            'telp' => '085753495541'
        ]);
        $masyarakat->attachRole('masyarakat');


    }
}
