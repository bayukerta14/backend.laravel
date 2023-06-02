<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_user'=>'Adminnistrator',
            'nim'=>'12345678',
            'role'=>'admin',
            'password'=>'admin'
        ]);
        user::factory()->count(20)->create();
    }
}
