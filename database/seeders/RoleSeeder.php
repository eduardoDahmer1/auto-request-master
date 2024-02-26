<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::factory()->create(['name' => 'admin', 'label' => 'admin']);
        Role::factory()->create(['name' => 'support', 'label' => 'support']);
        Role::factory()->create(['name' => 'dev', 'label' => 'dev']);
        Role::factory()->create(['name' => 'finances', 'label' => 'finances']);
        Role::factory()->create(['name' => 'commercial', 'label' => 'commercial']);
        Role::factory()->create(['name' => 'marketing', 'label' => 'marketing']);
    }
}
