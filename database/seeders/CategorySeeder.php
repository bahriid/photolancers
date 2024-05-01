<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Category::count();
        if ($count === 0){
            foreach (range(1, 20) as $item) {
                Category::create([
                    'name'=> 'Category '. $item,
                ]);
            }
        }
    }
}
