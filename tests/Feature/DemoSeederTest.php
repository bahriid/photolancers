<?php

namespace Tests\Feature;

use Database\Seeders\DemoSeeder;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Runs against the local database with the Laravolt location tables already seeded.
 */
class DemoSeederTest extends TestCase
{
    use DatabaseTransactions;

    public function test_home_page_lists_seeded_packages_and_photographers(): void
    {
        $this->seed(DemoSeeder::class);

        $this->get('/')
            ->assertOk()
            ->assertSee('Raka Pratama')
            ->assertSee('Akad &amp; Resepsi Full Day', false)
            ->assertDontSee('assets/js/plugins/counterup.js"></script>
    </main>', false);
    }

    public function test_login_page_shows_demo_buttons_only_in_demo_mode(): void
    {
        config(['app.demo_mode' => false]);
        $this->get('/login')->assertDontSee('demo-login');

        config(['app.demo_mode' => true]);
        $this->get('/login')->assertSee('demo-login');
    }
}
