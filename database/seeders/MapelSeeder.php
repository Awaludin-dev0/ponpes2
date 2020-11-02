<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mapel')->insert([
            [ 'mata_pelajaran' => 'Tauhid / Aqidah', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Al Qiroah', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Hadits', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Adab dan Akhlaq', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Fikih', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Bahasa Arab', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Nahwu / Sharaf', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Khat', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Siroh', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Do\'a', 'kategori' => 'Diniyah'],
            [ 'mata_pelajaran' => 'Matematika', 'kategori' => 'Umum'],
            [ 'mata_pelajaran' => 'Bahasa Indonesia', 'kategori' => 'Umum'],
            [ 'mata_pelajaran' => 'IPA', 'kategori' => 'Umum'],
            [ 'mata_pelajaran' => 'IPS', 'kategori' => 'Umum'],
        ]);
    }
}
