<?php

use Illuminate\Database\Seeder;

class PostesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
            
            DB::table('postes')->insert([

            'libelle'=>'Chef departement',
            'struct_id'=> 1,
            'highest_role' =>3,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);

            DB::table('postes')->insert([

            'libelle'=>'Comptable',
            'struct_id'=> 1,
            'highest_role' =>1,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
            DB::table('postes')->insert([

            'libelle'=>'Financier',
            'struct_id'=> 1,
            'highest_role' =>1,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
            DB::table('postes')->insert([

            'libelle'=>'Manager',
            'struct_id'=> 1,
            'highest_role' =>1,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
            DB::table('postes')->insert([

            'libelle'=>'Chef departement',
            'struct_id'=> 2,
            'highest_role' =>3,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
            DB::table('postes')->insert([

            'libelle'=>'Secretaire',
            'struct_id'=> 2,
            'highest_role' =>2,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
            DB::table('postes')->insert([

            'libelle'=>'Developpeur',
            'struct_id'=> 2,
            'highest_role' =>1,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
    
}
}