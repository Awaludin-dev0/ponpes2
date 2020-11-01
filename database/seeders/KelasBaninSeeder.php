<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasBaninSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<6;$i++) {
            DB::table('kelas_banin')->insert([
                'nama_kelas' => ($i+1)
            ]);
        }
    }
}
