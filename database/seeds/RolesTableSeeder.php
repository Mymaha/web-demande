<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('roles')->count() == 0) {
            DB::table('roles')->insert([

                'designation' =>'Agent',
                'priority' => '1',
                'updated_at' => now(),
                'created_at' => now()
            ]);
            DB::table('roles')->insert([

                'designation' =>'Secretaire',
                'priority' => '3',
                'updated_at' => now(),
                'created_at' => now()
            ]);
            DB::table('roles')->insert([

                'designation' =>'Chef de groupe',
                'priority' => '2',
                'updated_at' => now(),
                'created_at' => now()
            ]);
             DB::table('roles')->insert([

                'designation' =>'Chef departement',
                'priority' => '4',
                'updated_at' => now(),
                'created_at' => now()
            ]);
        }
    }
}
