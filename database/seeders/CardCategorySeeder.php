<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\CardCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardCategory::factory()
            ->count(5)
            ->has(
                Card::factory()
                    ->count(10)
            )
            ->create();
    }
}
