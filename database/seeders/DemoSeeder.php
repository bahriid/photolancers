<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\Package;
use App\Models\Photographer;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

/**
 * Portfolio demo data: curated photographers, packages and blog posts with freely licensed
 * photos shipped in public/demo/photos (sources in public/demo/photos/SOURCES.md).
 * Re-runnable and Faker-free. Needs the Laravolt location tables seeded first.
 * Run: php artisan db:seed --class=DemoSeeder --force
 */
class DemoSeeder extends Seeder
{
    /** @var array<string, array{0: string, 1: string}> category name => [photo key, description] */
    private const CATEGORIES = [
        'Travel & Honeymoon' => ['honeymoon', 'Holiday and honeymoon sessions at the places you travel to.'],
        'Pre-Wedding' => ['prewedding', 'Story-driven couple sessions before the big day.'],
        'Wedding' => ['wedding', 'Full-day coverage of ceremonies and receptions, traditional or modern.'],
        'Engagement' => ['engagement', 'Lamaran and engagement moments with family.'],
        'Maternity' => ['maternity', 'Gentle maternity portraits at home, in studio or outdoors.'],
        'Babies & Kids' => ['baby', 'Newborn, baby and kids sessions with a patient photographer.'],
        'Family' => ['family', 'Family portraits for Lebaran, anniversaries or just because.'],
        'Beauty & Fashion' => ['fashion', 'Lookbooks, editorials and beauty campaigns.'],
        'Birthday' => ['birthday', 'Birthday parties from first cake to sweet seventeen.'],
        'Graduation' => ['graduation', 'Wisuda portraits on campus and in studio.'],
        'Events Photography' => ['event', 'Concerts, launches, seminars and corporate events.'],
        'Conceptor Service' => ['studio', 'Concept, styling and art direction for themed shoots.'],
        'Product Photography' => ['product', 'Clean product shots for marketplaces and catalogs.'],
        'Budget Tour' => ['budget', 'Photo tours to landmarks on a budget.'],
        'Deluxe Tour' => ['deluxe', 'Private photo trips to remote islands and parks.'],
    ];

    /** @var array<int, array<string, mixed>> */
    private const PHOTOGRAPHERS = [
        ['name' => 'Raka Pratama', 'email' => 'raka@photolancers.id', 'province' => 'DKI JAKARTA', 'city' => 'JAKARTA SELATAN', 'categories' => ['Wedding', 'Pre-Wedding', 'Engagement'],
            'headline' => 'Wedding storyteller based in Jakarta. Ten years of Javanese, Sundanese and modern weddings, documentary style with a light touch.'],
        ['name' => 'Ayu Lestari', 'email' => 'ayu@photolancers.id', 'province' => 'BALI', 'city' => 'DENPASAR', 'categories' => ['Travel & Honeymoon', 'Pre-Wedding'],
            'headline' => 'Bali-based honeymoon and pre-wedding photographer. Sunrise at the rice fields, sunset on the cliffs, and everything in between.'],
        ['name' => 'Dimas Wicaksono', 'email' => 'dimas@photolancers.id', 'province' => 'DAERAH ISTIMEWA YOGYAKARTA', 'city' => 'YOGYAKARTA', 'categories' => ['Graduation', 'Budget Tour', 'Events Photography'],
            'headline' => 'Jogja photographer for wisuda, campus events and Borobudur sunrise tours.'],
        ['name' => 'Nadia Putri', 'email' => 'nadia@photolancers.id', 'province' => 'JAWA BARAT', 'city' => 'BANDUNG', 'categories' => ['Maternity', 'Babies & Kids', 'Family'],
            'headline' => 'Newborn and family photographer in Bandung. Calm sessions, natural light, and plenty of time for feeding breaks.'],
        ['name' => 'Fajar Nugroho', 'email' => 'fajar@photolancers.id', 'province' => 'JAWA TIMUR', 'city' => 'SURABAYA', 'categories' => ['Product Photography', 'Conceptor Service'],
            'headline' => 'Product and studio photographer for UMKM brands. Marketplace-ready photos with white or styled backgrounds.'],
        ['name' => 'Sinta Maharani', 'email' => 'sinta@photolancers.id', 'province' => 'SUMATERA UTARA', 'city' => 'MEDAN', 'categories' => ['Beauty & Fashion', 'Conceptor Service'],
            'headline' => 'Fashion and beauty photographer working with local designers and modest-wear brands across Sumatra.'],
        ['name' => 'Bagus Santoso', 'email' => 'bagus@photolancers.id', 'province' => 'PAPUA BARAT', 'city' => 'RAJA AMPAT', 'categories' => ['Deluxe Tour', 'Travel & Honeymoon'],
            'headline' => 'Island-hopping photo trips in Raja Ampat. Drone, underwater and liveaboard packages.'],
        ['name' => 'Larasati Wibowo', 'email' => 'laras@photolancers.id', 'province' => 'JAWA TENGAH', 'city' => 'SEMARANG', 'categories' => ['Birthday', 'Family', 'Engagement'],
            'headline' => 'Semarang photographer for birthdays, family days and lamaran. Fun, relaxed and fast delivery.'],
    ];

    /** @var array<string, array<int, array{0: string, 1: int, 2: int, 3: int, 4: string}>> category => [name, price, minutes, edited photos, description] (stored in hours, the unit the app shows) */
    private const PACKAGES = [
        'Wedding' => [['Akad & Resepsi Full Day', 18500000, 600, 400, 'Two photographers from preparation to the last guest, plus a 40-page album.'], ['Intimate Wedding', 7500000, 240, 150, 'For weddings under 100 guests: ceremony, family photos and dinner.']],
        'Pre-Wedding' => [['Pre-Wedding City Story', 4500000, 240, 60, 'Two locations in the city, outfit change, and a 1-minute teaser video.'], ['Pre-Wedding Sunrise Session', 3500000, 180, 40, 'Golden-hour session at one scenic location.']],
        'Engagement' => [['Lamaran Coverage', 2800000, 180, 80, 'Family exchange, ring moment and group photos.']],
        'Travel & Honeymoon' => [['Honeymoon Half Day', 3200000, 240, 70, 'Three spots of your choice, pickup from your hotel.'], ['Holiday Snapshot', 1500000, 90, 30, 'A quick session at one location while you travel.']],
        'Graduation' => [['Wisuda Campus Session', 950000, 90, 30, 'Individual and family photos on campus after the ceremony.'], ['Wisuda Studio Package', 650000, 60, 15, 'Studio portraits with toga, 2 printed 10R photos.']],
        'Budget Tour' => [['Borobudur Sunrise Photo Tour', 850000, 300, 25, 'Sunrise at Punthuk Setumbu, temple visit and photo stops.']],
        'Events Photography' => [['Seminar & Launch Coverage', 2500000, 240, 150, 'Documentation for seminars, launches and company events.']],
        'Maternity' => [['Maternity at Home', 1800000, 120, 30, 'Relaxed session in your home with natural light.']],
        'Babies & Kids' => [['Newborn Session', 2200000, 180, 25, 'Newborn session in the first 14 days, props included.'], ['Smash Cake', 1400000, 90, 30, 'First birthday cake smash in studio.']],
        'Family' => [['Family Portrait Outdoor', 1600000, 120, 40, 'Up to 10 people, outdoor location of your choice.']],
        'Product Photography' => [['Marketplace Product Pack', 1200000, 180, 30, '30 products on white background, ready for Shopee and Tokopedia.'], ['Styled Product Shoot', 3500000, 240, 20, 'Styled flat lays and lifestyle shots with props.']],
        'Conceptor Service' => [['Concept & Styling', 2000000, 240, 20, 'Moodboard, styling and art direction for a themed shoot.']],
        'Beauty & Fashion' => [['Lookbook Shoot', 4800000, 360, 60, 'Full-day lookbook with one model and two outfits per hour.'], ['Beauty Close-up Session', 2600000, 180, 25, 'Makeup and skincare product close-ups.']],
        'Deluxe Tour' => [['Raja Ampat 3D2N Photo Trip', 14500000, 2880, 200, 'Private boat, drone shots and Piaynemo viewpoint.']],
        'Birthday' => [['Birthday Party Coverage', 1750000, 180, 100, 'Party documentation from decoration to cake cutting.'], ['Sweet Seventeen', 2900000, 240, 120, 'Party coverage plus a short portrait session.']],
    ];

    /** @var array<int, array{0: string, 1: string, 2: string, 3: string}> title, category, photo key, body */
    private const BLOGS = [
        ['How to Choose a Wedding Photographer', 'Tips', 'wedding', 'Look at full galleries, not just highlights. Ask how many photographers come on the day, when the album is delivered, and what happens if it rains.'],
        ['7 Pre-Wedding Locations Around Bali', 'Inspiration', 'prewedding', 'From the rice terraces of Jatiluwih to the cliffs of Uluwatu, these spots photograph beautifully at golden hour.'],
        ['What to Wear for a Family Photo Session', 'Tips', 'family', 'Pick a palette of three colors, avoid big logos, and dress the kids last so they stay clean.'],
        ['Product Photos That Sell on Marketplaces', 'Business', 'product', 'Shoot every product from the same angle, keep the background clean, and show scale with a hand or a familiar object.'],
        ['Planning a Newborn Session', 'Guides', 'baby', 'The best window is the first two weeks. Keep the room warm, feed the baby right before, and leave a full morning free.'],
        ['Photographing Sunrise at Borobudur', 'Travel', 'budget', 'Arrive before 4:30, bring a tripod, and use the mist to frame the stupas.'],
    ];

    /** @var array<string, array<int, string>> */
    private array $photos = [];

    public function run(): void
    {
        Model::unguard();
        $this->loadPhotos();

        Schema::disableForeignKeyConstraints();
        foreach (['images', 'packages', 'photographers', 'blogs', 'categories'] as $table) {
            DB::table($table)->truncate();
        }
        Schema::enableForeignKeyConstraints();
        User::where('email', 'like', '%@photolancers.id')->delete();

        $admin = User::updateOrCreate(['email' => 'admin@gmail.com'], ['name' => 'Admin', 'password' => Hash::make('password'), 'role' => 'admin']);
        $admin->forceFill(['status' => 'active'])->save();

        $categories = collect(self::CATEGORIES)->map(fn ($meta, $name) => Category::create([
            'name' => $name,
            'description' => $meta[1],
            'image' => $this->photo($meta[0], 0),
        ]));

        foreach (self::PHOTOGRAPHERS as $i => $data) {
            $photographer = $this->photographer($data, $i, 'active');

            foreach ($data['categories'] as $categoryName) {
                foreach (self::PACKAGES[$categoryName] ?? [] as $n => [$name, $price, $minutes, $edited, $description]) {
                    $package = Package::create([
                        'photographer_id' => $photographer->id,
                        'category_id' => $categories[$categoryName]->id,
                        'name' => $name,
                        'description' => $description,
                        'price' => $price,
                        'discount' => [0, 10, 15, 0, 20][($i + $n) % 5],
                        'duration' => (int) ceil($minutes / 60),
                        'camera' => ['Sony A7 IV', 'Canon EOS R6 Mark II', 'Nikon Z6 II', 'Fujifilm X-T5'][$i % 4],
                        'lenses' => ['24-70mm f/2.8 and 85mm f/1.8', '35mm f/1.4 and 70-200mm f/2.8', '50mm f/1.2', '16-35mm f/4 and 90mm macro'][($i + $n) % 4],
                        'media' => ['Google Drive link', 'Google Drive + printed album', 'Flashdisk + 10 printed 4R photos'][$n % 3],
                        'edited_photo' => $edited,
                        'raw_photo' => $n % 2 === 0,
                        'province_id' => $photographer->province_id,
                        'city_id' => $photographer->city_id,
                    ]);

                    $key = self::CATEGORIES[$categoryName][0];
                    foreach (range(0, 2) as $k) {
                        $package->images()->save(new Image(['url' => $this->photo($key, $n + $k)]));
                    }
                    $photographer->images()->save(new Image(['url' => $this->photo($key, $n + 3)]));
                }
            }
        }

        foreach ([['Yoga Prasetyo', 'yoga@photolancers.id'], ['Mega Anggraini', 'mega@photolancers.id']] as $n => [$name, $email]) {
            $this->photographer(['name' => $name, 'email' => $email, 'province' => 'BALI', 'city' => 'BADUNG', 'categories' => [],
                'headline' => 'New photographer waiting for approval.'], 10 + $n, 'waiting_approval');
        }

        foreach (self::BLOGS as $n => [$title, $category, $key, $body]) {
            Blog::create([
                'user_id' => $admin->id,
                'title' => $title,
                'slug' => Str::slug($title),
                'category' => $category,
                'banner' => $this->photo($key, $n + 1),
                'description' => "<p>{$body}</p><p>Find photographers for this on Photolancers: filter by category and city, compare packages, and contact them directly.</p>",
                'created_at' => now()->subDays(3 + $n * 5),
            ]);
        }

        Model::reguard();
    }

    /** @param  array<string, mixed>  $data */
    private function photographer(array $data, int $i, string $status): Photographer
    {
        $user = User::create(['name' => $data['name'], 'email' => $data['email'], 'password' => Hash::make('password'), 'role' => 'photographer']);
        $user->forceFill(['status' => $status, 'created_at' => now()->subDays(120 - $i * 9)])->save();

        $province = DB::table('indonesia_provinces')->where('name', $data['province'])->first();
        $city = DB::table('indonesia_cities')->where('province_code', $province?->code)->where('name', 'like', '%'.$data['city'].'%')->first();
        $handle = Str::slug(explode(' ', $data['name'])[0]).'.photo';

        return Photographer::create([
            'user_id' => $user->id,
            'phone' => sprintf('+62 812-%04d-%04d', 3100 + $i * 137, 2200 + $i * 911),
            'photo' => $this->photo('photographer', $i),
            'date_of_birth' => now()->subYears(26 + $i)->format('Y-m-d'),
            'headline' => $data['headline'],
            'instagram' => "https://instagram.com/{$handle}",
            'facebook' => null,
            'twitter' => null,
            'portofolio' => null,
            'address' => ucwords(strtolower($data['city'])).', '.ucwords(strtolower($data['province'])),
            'province_id' => $province?->id,
            'city_id' => $city?->id,
        ]);
    }

    private function loadPhotos(): void
    {
        foreach (glob(public_path('demo/photos/*.jpg')) as $file) {
            $name = basename($file, '.jpg');
            $key = Str::beforeLast($name, '-');
            $this->photos[$key][] = '/demo/photos/'.$name.'.jpg';
        }
        foreach ($this->photos as &$list) {
            natsort($list);
            $list = array_values($list);
        }
    }

    private function photo(string $key, int $n): ?string
    {
        $pool = $this->photos[$key] ?? $this->photos['wedding'] ?? [];

        return $pool ? $pool[$n % count($pool)] : null;
    }
}
