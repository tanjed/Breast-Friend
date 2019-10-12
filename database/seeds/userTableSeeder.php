<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $gender = $faker->randomElement(['male', 'female']);
        User::create([
            'first_name' => 'Tanjed',
            'last_name' => 'Ahmed',
            'email' => 'ahmedtanjed@gmail.com',
            'password' => bcrypt('admin'),
            'birthday' => '2015-12-31',
            'gender' => $gender,
            'phoneno' => $faker->phoneNumber,
            'email_verification_token' => str_random(10).time(),
        ]);
        factory('App\Models\User',5)->create();
    }
}
