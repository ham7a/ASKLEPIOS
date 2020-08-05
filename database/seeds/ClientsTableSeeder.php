<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('clients')->insert(
		[
            'nomClient' => 'Raakaan Mahmood',
            'adresseClient' => 'Angle Rue De La Victoir Et Rue Jules Cesar Roches Noires',
            'telephoneClient' => '0612345678',
            'emailClient' => 'mahmood.r@asklepios.fake',
        ]);
		DB::table('clients')->insert(
		[
            'nomClient' => 'Nizaar Sayed',
            'adresseClient' => 'ALLEE DES CACTUS AIN SEBAA',
            'telephoneClient' => '0612345678',
            'emailClient' => 'sayed.n@asklepios.fake',
        ]);
		DB::table('clients')->insert(
		[
            'nomClient' => 'Amniyya Ansari',
            'adresseClient' => '6 rue Jbel Moussa Agdal, Rabat',
            'telephoneClient' => '0612345678',
            'emailClient' => 'ansari.a@asklepios.fake',
        ]);
    }
}
