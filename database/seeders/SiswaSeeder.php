<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'samsul',
            'NIK' => '12323',
            'alamat' => 'bandung',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'asep',
            'NIK' => '12324',
            'alamat' => 'Jawa',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' => 'rapi',
            'NIK' => '12325',
            'alamat' => 'Garut',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
