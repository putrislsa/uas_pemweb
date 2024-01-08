<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            'nama_pegawai' => 'Putri Salsa',
            'alamat_pegawai' => 'Bandung',
            'no_hp_pegawai' => '08131110',
            'status' => 'Manager',
            'keterangan' => 'Aktif',
        ]);
    }
}
