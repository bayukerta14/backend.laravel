<?php
use Illuminate\Database\Seeder;
use App\Models\Kandidat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Kandidat::factory()->count(4)->create();
        // Buat 10 data kandidat menggunakan factory
    }
}






// namespace Database\Seeders;

// use Illuminate\Database\Seeder;

// class kandidat extends Seeder
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
