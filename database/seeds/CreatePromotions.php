<?php

use Illuminate\Database\Seeder;

class CreatePromotions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Promotions::class, 15)->create();
    }
}
