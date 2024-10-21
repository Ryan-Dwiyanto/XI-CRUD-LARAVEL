<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayahs = ['Wikrama', 'Sukasari', 'Tajur', 'Cicurug', 'Cibedug', 'Cisarua', 'Ciawi'];

        foreach ($wilayahs as $nama) {
            DB::table('wilayahs')->insert(['nama' => $nama]);
        }
    }
}
