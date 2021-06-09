<?php

namespace Database\Seeders;

use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
         Urun::truncate();
         Urun::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
