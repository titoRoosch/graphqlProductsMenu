<?php

use Illuminate\Database\Seeder;

class CreateAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'admin', 
            'email' => 'admin@teste.com.br', 
            'password' => Hash::make('123mudar'),
        ];

        $user = DB::table('users')->insert($admin);

    }
}
