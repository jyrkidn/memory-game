<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\CardCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardCategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (CardCategory $card) {
            $url = 'https://picsum.photos/400';

            $card
                ->addMediaFromUrl($url)
                ->toMediaCollection('image');
        });
    }
}
