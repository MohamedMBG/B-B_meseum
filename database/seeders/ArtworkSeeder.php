<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->insert([
            [
                'user_id' => 1, // Replace with actual user ID
                'category_id' => 2, // Replace with actual category ID
                'title' => 'Sunset Bliss',
                'description' => 'A beautiful painting capturing the essence of a sunset.',
                'image_path' => 'https://cdn.midjourney.com/a36e50f8-1531-48fc-bf10-3d167e5206d3/0_2.jpeg',
                'dimensions' => '1920x1080',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Replace with actual user ID
                'category_id' => 3, // Replace with actual category ID
                'title' => 'Ocean Waves',
                'description' => 'An artwork showcasing the serenity of ocean waves.',
                'image_path' => 'https://cdn.midjourney.com/a36e50f8-1531-48fc-bf10-3d167e5206d3/0_2.jpeg',
                'dimensions' => '1080x1080',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1, // Replace with actual user ID
                'category_id' => 2, // Replace with actual category ID
                'title' => 'Mountain Peak',
                'description' => 'An inspiring view of a majestic mountain peak.',
                'image_path' => 'https://cdn.midjourney.com/a36e50f8-1531-48fc-bf10-3d167e5206d3/0_2.jpeg',
                'dimensions' => '2048x1365',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        
     
    }
}
