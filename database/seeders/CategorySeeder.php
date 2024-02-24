<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Development',
            'slug' => 'development',
            'image' => 'uploads/images/categories/development.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Business',
            'slug' => 'business',
            'image' => 'uploads/images/categories/business.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Finance',
            'slug' => 'finance',
            'image' => 'uploads/images/categories/finance.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Marketing',
            'slug' => 'marketing',
            'image' => 'uploads/images/categories/marketing.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'IT & Software',
            'slug' => 'it-software',
            'image' => 'uploads/images/categories/it-software.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'Photography',
            'slug' => 'photography',
            'image' => 'uploads/images/categories/photography.jpg',
        ]);
    }
}
