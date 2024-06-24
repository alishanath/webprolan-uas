<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama' => 'Aliya Putri Nurrahmani',
            'nomor_induk' => '1122',
            'alamat' => 'Patikraja',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Devita Apriliani',
            'nomor_induk' => '3344',
            'alamat' => 'Metenggeng',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Esther Oktavia Hotoroe',
            'nomor_induk' => '5566',
            'alamat' => 'Berkoh',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
