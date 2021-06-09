<?php

namespace Database\Seeders;

use App\Models\UrunDetay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunDetayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        UrunDetay::factory(1)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
