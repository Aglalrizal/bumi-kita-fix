<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->unique()->sentence(mt_rand(5, 8)),
            'slug'=> $this->faker->unique()->slug(),
            'kota'=> $this->faker->city(),
            'description'=> collect($this->faker->paragraphs(mt_rand(3,5)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'hari_pelaksanaan'=>$this->faker->dateTimeBetween('-30 days', '+30 days'),
            'jml_volunteer'=> mt_rand(20, 60),
            'user_id'=> mt_rand(1, 5),
        ];
    }
}
