<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\table;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nom' => 'John Doe',
                'prenom' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0623144441',
            ],
            [
                'nom' => 'BAAKKA',
                'prenom' => 'Monssef',
                'email' => 'baakka@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0999887766',
            ],
            [
                'nom' => 'BAGHDAD',
                'prenom' => 'Mohamed',
                'email' => 'baghdad@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '063144422',
            ],
            [
                'nom' => 'SMITH',
                'prenom' => 'Will',
                'email' => 'willsmith@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0712345678',
            ],
            [
                'nom' => 'JOHNSON',
                'prenom' => 'Emily',
                'email' => 'emilyjohnson@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0723456789',
            ],
            [
                'nom' => 'WILLIAMS',
                'prenom' => 'James',
                'email' => 'jameswilliams@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0734567890',
            ],
            [
                'nom' => 'BROWN',
                'prenom' => 'Olivia',
                'email' => 'oliviabrown@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0745678901',
            ],
            [
                'nom' => 'JONES',
                'prenom' => 'Liam',
                'email' => 'liamjones@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0756789012',
            ],
            [
                'nom' => 'GARCIA',
                'prenom' => 'Sophia',
                'email' => 'sophiagarcia@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0767890123',
            ],
            [
                'nom' => 'MARTINEZ',
                'prenom' => 'Mason',
                'email' => 'masonmartinez@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0778901234',
            ],
            [
                'nom' => 'RODRIGUEZ',
                'prenom' => 'Isabella',
                'email' => 'isabellarodriguez@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0789012345',
            ],
            [
                'nom' => 'LEE',
                'prenom' => 'Ethan',
                'email' => 'ethanlee@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0790123456',
            ],
            [
                'nom' => 'HERNANDEZ',
                'prenom' => 'Ava',
                'email' => 'avahernandez@example.com',
                'password' => bcrypt('password123'),
                'profile_image' => 'https://png.pngtree.com/png-clipart/20230927/original/pngtree-man-avatar-image-for-profile-png-image_13001882.png',
                'phone' => '0801234567',
            ]
        ]);
    }
}
