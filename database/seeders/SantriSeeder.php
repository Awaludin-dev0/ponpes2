<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('data_santri')->insert([
            'nama_santri' => 'Abdullah'
            'tanggal_lahir' => '2013-11-11',
            'jenis_kelamin' => 'L',
            'ayah' => 'Lukman, S.T',
            'ibu' => 'Demiarti',
            'alamat_santri' => 'Dusun Nagur Rt. 006 Rw. 003 Desa Jagur  Kec. Sambas Kab. Sambas'
        ]);
    }
}
