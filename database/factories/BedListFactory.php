<?php

namespace Database\Factories;

use App\Models\Bed;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BedList>
 */
class BedListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $bed_prefix = Arr::random(Bed::pluck('prefix')->toArray());
        $bed_ids = Bed::where('prefix', $bed_prefix)->first();

        return [
            'bed_id' => $bed_ids->id,
            'bed_no' => $bed_prefix . fake()->numberBetween(5, $bed_ids->count)
        ];
    }
}
