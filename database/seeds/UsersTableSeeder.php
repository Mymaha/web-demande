<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('utilisateurs')->count() == 0) {
            DB::table('utilisateurs')->insert([

                'name' =>'Lekhal Maha',
                'email' => 'myMaha@gmail.com',
                'password' => Hash::make('123456'),
                'created_at' => now()
            ]);
        }
    }
}
