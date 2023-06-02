<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Password;

class PasswordFactory extends Factory
{
    protected $model = Password::class;

    public function definition()
    {
        return [
            'password' => bcrypt('password123'), // Menggunakan bcrypt() untuk mengenkripsi password
        ];
    }
}

