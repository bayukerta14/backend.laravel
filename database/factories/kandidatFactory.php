<?php

namespace Database\Factories;

use App\Models\Kandidat;
use Illuminate\Database\Eloquent\Factories\Factory;

class KandidatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kandidat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'foto_paslon'=>$this->faker->img,
            'nama_user' => $this->faker->name,
            'nim' => $this->faker->numberBetween(20, 60),
            'visi' => $this->faker->text,
            'misi' => $this->faker->text,
            // Tambahkan kolom lain sesuai kebutuhan
        ];
    }
}






// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

// class kandidatFactory extends Factory
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
