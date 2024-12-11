<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Immanuel',
            'username' => 'imma',
            'password' => '$2y$10$Pyq6zaVu8oktKdyqEvRRMutDUlsQKBXbdk3skKB10aj719uC73qsm', // password
        ];
    }


}
