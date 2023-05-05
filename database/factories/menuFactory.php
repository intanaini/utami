<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\menu>
 */
class menuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $foodNames = [
            'Nasi Goreng', 'Mie Goreng', 'Ayam Goreng', 'Sate Ayam',
            'Bakso', 'Soto', 'Nasi Padang', 'Gado-gado', 'Rendang',
            'Martabak', 'Nasi Uduk', 'Mie Ayam', 'Ketoprak', 'Bubur Ayam'
        ];

        $drinkNames = [
            'Es Teh', 'Es Jeruk', 'Es Campur', 'Es Doger',
            'Kopi Hitam', 'Kopi Susu', 'Kopi Tubruk', 'Kopi Luwak',
            'Jus Jeruk', 'Jus Alpukat', 'Jus Tomat', 'Jus Mangga',
            'Teh Tarik', 'Teh Botol', 'Soda Gembira', 'Soda Susu'
        ];

        $hargaMenu = $this->faker->numberBetween(10000, 50000);
        $hargaMenu = floor($hargaMenu / 5000) * 5000;

        $typeMenu = $this->faker->randomElement(['Makanan', 'Minuman']);
        $namaMenu = ($typeMenu == 'Makanan')
            ? $this->faker->randomElement($foodNames)
            : $this->faker->randomElement($drinkNames);

        return [
            'nama_menu' => $namaMenu,
            'harga_menu' => $hargaMenu,
            'type_menu' => $typeMenu,
            'gambar' => ' ',
            'status' => Arr::random(['Tersedia', 'Tidak Tersedia'])
        ];
    }
}
