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
        
           /* DB::table('users')->insert([

                'name' =>'Karam Henni',
               'email' => 'karam.tenes@gmail.com',
                'password' => Hash::make('karamhenni'),
                'created_at' => now()
            ]);*/

            DB::table('users')->insert([

                'name' =>'Benyakoub Sanaa',
               'email' => 'sanaa.benyakoub@gmail.com',
                'password' => Hash::make('sanaabenyakoub'),
                'created_at' => now()
            ]);

            DB::table('users')->insert([

                'name' =>'Meghebbar Yacine',
               'email' => 'meghebbar.yacine@gmail.com',
                'password' => Hash::make('meghebbaryacine'),
                'created_at' => now()
            ]);

            }
}
