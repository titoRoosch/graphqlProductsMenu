<?php

use Illuminate\Database\Seeder;

class CreateProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Products::class, 15)->create();
    }
}
