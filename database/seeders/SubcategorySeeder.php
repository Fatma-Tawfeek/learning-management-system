<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            'name' =>  'Web Development',
            'slug' =>  'web-development',
            'category_id' => 1,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Mobile Development',
            'slug' =>  'mobile-development',
            'category_id' => 1,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Graphic Design',
            'slug' =>  'graphic-design',
            'category_id' => 6,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Video Editing',
            'slug' =>  'video-editing',
            'category_id' => 6,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Photography',
            'slug' =>  'photography',
            'category_id' => 6,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Content Writing',
            'slug' =>  'content-writing',
            'category_id' => 2,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Digital Marketing',
            'slug' =>  'digital-marketing',
            'category_id' => 4,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'SEO',
            'slug' =>  'seo',
            'category_id' => 4,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Social Media Marketing',
            'slug' =>  'social-media-marketing',
            'category_id' => 4,
        ]);

        DB::table('subcategories')->insert([
            'name' =>  'Translation',
            'slug' =>  'translation',
            'category_id' => 2,
        ]);
    }
}
