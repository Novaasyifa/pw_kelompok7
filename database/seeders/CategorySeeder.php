<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Novel',
            'slug' => 'novel'
        ]);

        Category::create([
            'name' => 'Sains',
            'slug' => 'sains'
        ]);

        Category::create([
            'name' => 'Biografi',
            'slug' => 'biografi'
        ]);

        Category::create([
            'name' => 'Komik',
            'slug' => 'komik'
        ]);
    }
}
