<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Package;
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
        if ($count === 0) {
            foreach (range(1, 20) as $item) {
                $user = User::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => Hash::make('password'),
                    'role' => 'photographer',
                ]);

                $photographer = Photographer::create([
                    'user_id' => $user['id'],

//                    'identity_number' => '1234123412341234',
//                    'npwp' => '1234123412341234',
                    'phone' => $faker->phoneNumber,
                    'photo' => $faker->imageUrl,
                    'date_of_birth' => $faker->date,

                    'headline' => $faker->realText,

                    'instagram' => 'https://www.instagram.com/stevemccurryofficial',
                    'facebook' => $faker->url,
                    'twitter' => $faker->url,
                    'portofolio' => $faker->url,

                    'address' => $faker->address,
                    'province_id' => rand(1, 34),
                    'city_id' => rand(1, 514),
                ]);

                foreach (range(1, 20) as $item) {
                    $package = Package::create([
                        'photographer_id' => $photographer->id,
                        'category_id' => rand(1, 15),
                        'price' => rand(100000, 200000),
                        'discount' => rand(20, 60),

                        'name' => $faker->name,
                        'description' => $faker->realText,
                        'duration' => rand(60, 180),
                        'camera' => $faker->name,
                        'lenses' => $faker->name,
                        'media' => $faker->name,
                        'edited_photo' => rand(10, 100),
                        'raw_photo' => rand(true, false),
                        'notes' => $faker->realText,
                        'province_id' => rand(1, 20),
                        'city_id' => rand(1, 20),
                    ]);

                    foreach (range(1, 5) as $item) {
                        $image = new Image();
                        $image->url = $faker->imageUrl;

                        $package->images()->save($image);
                    }
                }
            }
        }
    }
}
