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
        
            DB::table('users')->insert([

                'name' =>'Karam Henni',
                'email' => 'karam.tenes@gmail.com',
                'password' => Hash::make('karamhenni'),
                'created_at' => now()
            ]);
            }
}
