<?php

namespace Database\Factories;

use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrunDetayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UrunDetay::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $urunid = UrunDetay::all()->last();
        return [
            'urun_id'   => 10,
            'goster_slider' => rand(0, 1),
            'goster_gunun_firsati' => rand(0, 1),
            'goster_one_cikan' => rand(0, 1),
            'goster_cok_satan' => rand(0, 1),
            'goster_indirimli' => rand(0, 1),


        ];
    }
}
