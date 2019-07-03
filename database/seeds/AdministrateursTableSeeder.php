<?php

use Illuminate\Database\Seeder;

class AdministrateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       if(DB::table('administrateurs')->count() == 0) {
            DB::table('administrateurs')->insert([

                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'created_at' => now()
            ]);
        }
    }
}
