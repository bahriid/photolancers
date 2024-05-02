<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Photographer;
use App\Models\User;
use App\Utilities\Helpers;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PhotographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $count = Photographer::count();
        if ($count === 0){
            foreach (range(1, 20) as $item) {
                $user = User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'role' => 'photographer',
                ]);

                info($user);

                Photographer::create([
                    'user_id' => $user['id'],
                    'identity_number' => '1234123412341234',
                    'npwp' => '1234123412341234',
                    'phone' => $faker->phoneNumber,
                    'photo' => $faker->imageUrl,
                    'date_of_birth' => $faker->date,

                    'headline' => $faker->sentence,

                    'instagram' => $faker->url,
                    'facebook' => $faker->url,
                    'twitter' =>  $faker->url,
                    'portofolio' => $faker->url,

                    'address' => $faker->address,
                    'province_id' =>rand(1,34),
                    'city_id' => rand(1, 514),

                    'bank_name' => $faker->name,
                    'bank_account_name' => $faker->name,
                    'bank_account_number' => $faker->randomNumber(9),
                ]);
            }
        }
    }
}
