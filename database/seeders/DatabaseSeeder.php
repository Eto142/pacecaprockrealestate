<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Only the public listing data (countries, houses, house images) is tracked
     * in git. The account and financial seeders are generated from a production
     * snapshot and contain personal data, so they are gitignored and only exist
     * on machines that have been given the dump. They are called when present.
     *
     * Order matters: countries before houses, houses before house_images, and
     * users before every table that carries a user_id foreign key.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            HouseSeeder::class,
            HouseImageSeeder::class,
        ]);

        $private = [
            UserSeeder::class,
            AdminSeeder::class,
            DepositSeeder::class,
            EarningSeeder::class,
            InvestmentSeeder::class,
            WithdrawalSeeder::class,
        ];

        $available = array_filter($private, fn ($seeder) => class_exists($seeder));

        if ($available === []) {
            $this->command?->warn('Account and financial seeders not present - seeded public listing data only.');

            return;
        }

        $this->call($available);
    }
}
