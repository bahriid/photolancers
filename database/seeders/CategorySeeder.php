<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Travel & Honeymoon' => 'https://media.flytographer.com/uploads/2022/07/Honeymoon-photoshoot-photographer-flytographer-14.jpeg',
            'Pre-Wedding' => 'https://images.pexels.com/photos/1295946/pexels-photo-1295946.jpeg?cs=srgb&dl=pexels-l-u-d-c-anh-547928-1295946.jpg&fm=jpg',
            'Wedding'=> 'https://cdn.l-media.net/media/50/46305/1071897-46305-l-67123vEgu9Ug.jpg',
            'Engagement' => 'https://trishallisonphotography.com/wp-content/uploads/2020/05/2020-05-06_0002-1-686x1024.jpg',
            'Maternity'=>'https://melissahartiganphotography.com/wp-content/uploads/2021/06/Connecticut-Maternity-Photography.jpg',
            'Babies & Kids' => 'https://anakoskaphotography.com/wp-content/uploads/2018/05/Eli-2.jpg',
            'Family' => 'https://i.pinimg.com/736x/60/c7/30/60c7300ad5376b292b26378751cb3b35.jpg',
            'Beauty & Fashion' => 'https://assets.vogue.in/photos/620b4dac94526a483b55a2c9/master/w_1600%2Cc_limit/DSC_0213%2520fininsta.jpg',
            'Birthday' => 'https://www.dazzlingdivaphotography.com/wp-content/uploads/2021/01/childrens-portrait-photographer-dazzling-diva-photography-32.jpg',
            'Graduation' => 'https://img.freepik.com/free-photo/front-view-graduate-with-bouquet-roses_23-2148232759.jpg',
            'Events Photography' => 'https://ubersnap.com/blog/wp-content/uploads/2020/10/event-photographer-with-camera.jpg',
            'Conceptor Service' => 'https://thelenstory.com/uploads/thumb_11520171125232143-S_7045634444159.jpg',
            'Product Photography' => 'https://cc-prod.scene7.com/is/image/CCProdAuthor/product-photography_P3a_720x560?$pjpeg$&jpegSize=200&wid=720',
            'Budget Tour' => 'https://cdn.tourradar.com/s3/tour/360x210/126562_df7e2981.jpg',
            'Deluxe Tour' => 'https://idubephotosafaris.com/wp-content/uploads/2020/04/sAT0I9721-1.jpg',
        ];

        $faker = \Faker\Factory::create('id_ID');
        $count = Category::count();
        if ($count === 0) {
            foreach ($categories as $key =>  $item) {
                Category::create([
                    'name' => $key,
                    'description' => 'Lorem Ipsum dolor amet',
                    'image' => $item,
                ]);
            }
        }
    }
}
