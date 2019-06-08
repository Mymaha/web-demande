<?php

use Illuminate\Database\Seeder;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          if(DB::table('agents')->count() == 0) {
            DB::table('agents')->insert([

                'nom' =>'Lekhal',
                'prenom' => 'Maha',
                'sexe'=>'Femme',
                'user_id' => 1,
                'poste_id' =>1,
                 'updated_at'=>now(),
                'created_at' => now()
               
                
        
            ]);
        }
    }
}
