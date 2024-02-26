<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'contato@agenciacrow.com.py',
            'password' => '$2y$10$yNL3k293UW8wkMpzJRmi3OjwGo6n2w7whHvY9wOYqWDcdE2Ke3G.a',
        ]);

        Site::factory(10)->create(['type' => 'institutional']);
        Site::factory(10)->create(['type' => 'stage']);
        Site::factory(10)->create(['type' => 'store with integration']);
        Site::factory(10)->create(['type' => 'common store']);
    }
}
