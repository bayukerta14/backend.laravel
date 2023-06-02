<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vote;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vote::factory()->count(50)->create();
        // Membuat 50 data Vote menggunakan factory
    }
}






// class vote extends Seeder
// {
//     **
//      * Run the database seeds.
//      *
//      * @return void
//      *
//     public function run()
//     {
        
//     }
// }
