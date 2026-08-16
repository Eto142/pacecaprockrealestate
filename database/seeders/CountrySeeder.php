<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeds the `countries` table from the production snapshot (7 rows).
 *
 * Generated from the eagnxsfnnx_pace dump; primary keys are preserved so the
 * foreign keys between countries, houses, house_images and users stay intact.
 */
class CountrySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->insert([
            [
                'id' => '7',
                'country' => 'United States BASE HOUSES',
                'slug' => 'usa',
                'created_at' => '2023-03-17 04:05:37',
                'updated_at' => '2023-03-17 04:05:37',
            ],
            [
                'id' => '9',
                'country' => 'European BASE HOUSES',
                'slug' => 'european',
                'created_at' => '2023-03-17 04:07:16',
                'updated_at' => '2023-03-17 04:07:16',
            ],
            [
                'id' => '10',
                'country' => 'USA Apartments',
                'slug' => 'california',
                'created_at' => '2023-03-26 16:24:41',
                'updated_at' => '2023-03-26 16:24:41',
            ],
            [
                'id' => '11',
                'country' => 'Canada Apartments',
                'slug' => 'canada',
                'created_at' => '2023-03-27 02:59:10',
                'updated_at' => '2023-03-27 02:59:10',
            ],
            [
                'id' => '12',
                'country' => 'United States Lots/Land',
                'slug' => 'miami-fl',
                'created_at' => '2023-03-29 03:37:16',
                'updated_at' => '2023-03-29 03:37:16',
            ],
            [
                'id' => '15',
                'country' => 'United States, Makong Boat',
                'slug' => 'tourism-suit-boat-for-cruising',
                'created_at' => '2023-05-09 22:58:47',
                'updated_at' => '2023-05-09 22:58:47',
            ],
            [
                'id' => '16',
                'country' => 'Home',
                'slug' => 'banan',
                'created_at' => '2025-09-24 14:54:33',
                'updated_at' => '2025-09-24 14:54:33',
            ],
        ]);
    }
}
