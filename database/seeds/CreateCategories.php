<?php

use Illuminate\Database\Seeder;

class CreateCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Categories::class, 5)->create();
    }
}
