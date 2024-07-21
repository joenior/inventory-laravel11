<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
		DB::table('users')->insert([
            [
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'password'      => bcrypt('admin098#'),
                'created_at'    => date("Y-m-d H:i:s"),
				'role'          => 'admin'
            ],
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    ]);
    }
}