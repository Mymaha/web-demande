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
         if(DB::table('postes')->count() == 0) {
            DB::table('postes')->insert([

            'libelle'=>'Secretaire',
            'struct_id'=> 1,
            'updated_at'=>now(),
            'created_at' => now()
                
        
            ]);
    }
}
}