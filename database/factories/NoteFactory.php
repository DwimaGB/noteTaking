<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    protected $model = Note::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->sentence,
            'created_at' => Carbon::now()->subDays(rand(1, 30)), // Generates dates between 1 to 30 days ago
        ];
    }
}
