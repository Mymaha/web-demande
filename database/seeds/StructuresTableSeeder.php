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
         
            DB::table('structures')->insert([

            'libelle'=>'SME',
            'updated_at'=> now(),
            'created_at' => now()
            
                
        
            ]);
            DB::table('structures')->insert([

            'libelle'=>'ISI',
            'updated_at'=> now(),
            'created_at' => now()
            
                
        
            ]);
            DB::table('structures')->insert([

            'libelle'=>'ADM',
            'updated_at'=> now(),
            'created_at' => now()
            
                
        
            ]);
    
}
}
