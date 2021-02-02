<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','mithuncdas.cse@gmail.com');
        if(isNull($user)){
            User::insert([
                'name' => 'Mithun Das',
                'email' => 'mithuncdas.cse@gmail.com',
                'password' => Hash::make('12345678'),

            ]);
        }
    }
}
