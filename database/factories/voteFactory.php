<?php


namespace Database\Factories;

use App\Models\Vote;
use App\Models\Kandidat;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kandidat_id' => Kandidat::factory(),
            'user_id' => $this->faker->numberBetween(1, 10),
            // Add other fields as per your Vote model
        ];
    }
}






// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

// class voteFactory extends Factory
// {
//     **
//      * Define the model's default state.
//      *
//      * @return array
//      *
//     public function definition()
//     {
//         return [
            
//         ];
//     }
// }
