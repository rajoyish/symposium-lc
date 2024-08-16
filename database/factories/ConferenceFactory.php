<?php

namespace Database\Factories;

use App\Models\Conference;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startsAt = now()->addMonths(6);
        $endsAt = $startsAt->clone()->addDays(3);
        $cfpStartsAt = $startsAt->clone()->subMonths(4);
        $cfpEndsAt = $cfpStartsAt->clone()->addMonths(2);

        return [
            'title' => fake()->country().' Conference',
            'location' => fake()->address(),
            'description' => fake()->realText(),
            'url' => fake()->url(),
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
            'cfp_starts_at' => $cfpStartsAt,
            'cfp_ends_at' => $cfpEndsAt,
        ];
    }
}
