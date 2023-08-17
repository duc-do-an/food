<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => 'XE ' . $count++,
            'images' => '/images/ảnh '.rand(1,5).'.jpg' ,
            'model' => 'Car ' . $dem++,
            'produced_on'=> now(),
            
            
        ];
    }
}
