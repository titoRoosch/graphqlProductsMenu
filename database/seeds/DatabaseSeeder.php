<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CreateAdmin::class);
        $this->call(CreateCategories::class);
        $this->call(CreateProducts::class);
        $this->call(CreatePromotions::class);
    }
}
