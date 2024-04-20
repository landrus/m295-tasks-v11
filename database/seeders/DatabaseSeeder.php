<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Bike;
use App\Models\Farm;
use App\Models\Plant;
use App\Models\Post;
use App\Models\Topic;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Bike::factory(10)
            ->create();

        Author::factory(5)
            ->create();
        Topic::factory(10)
            ->create();
        Post::factory(100)
            ->create();

        //Plant::factory(20)
        //    ->has(Farm::factory())
        //    ->create();

        Farm::factory(20)
            ->for(Plant::factory())
            ->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
