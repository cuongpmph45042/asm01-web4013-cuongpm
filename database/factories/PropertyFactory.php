<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 6),
            'title' => fake()->text(40),
            'image' => null,
            'address' => $this->fakeCity(),
            'area' => fake()->randomFloat(2, 1, 100),
            'rooms' => fake()->numberBetween(1, 10),
            'description' => fake()->paragraph(5),
            'price' => fake()->numberBetween(500, 99999)
        ];
    }

    private function fakeCity(): string
    {
        $cities = [
            'Hà Nội',
            'TP. Hồ Chí Minh',
            'Đà Nẵng',
            'Hải Phòng',
            'Cần Thơ',
            'Nha Trang',
            'Huế',
            'Vũng Tàu',
            'Đà Lạt',
            'Quảng Ninh'
        ];

        return $this->faker->randomElement($cities);
    }
}
