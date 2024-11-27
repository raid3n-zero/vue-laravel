<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{

    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->word(),
            'name_generate' => fake()->word(),
            'type' => fake()->fileExtension(),
            'size' => fake()->randomNumber(4),
            'folder_id' => fake()->randomDigitNotZero()
        ];
    }
}
