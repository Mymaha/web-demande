<?php

use Illuminate\Database\Seeder;

class StructuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         if(DB::table('structures')->count() == 0) {
            DB::table('structures')->insert([

            'libelle'=>'Finance',
            'updated_at'=> now(),
            'created_at' => now()
            
                
        
            ]);
    }
}
}
