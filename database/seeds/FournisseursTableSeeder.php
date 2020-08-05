<?php

use Illuminate\Database\Seeder;

class FournisseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('fournisseurs')->insert(
		[
            'nomFournisseur' => 'BAYER S.A',
            'adresseFournisseur' => 'Tour d\'Ivoire 1, 3° Etage Bd des Almohades 20030 Casablanca',
            'telephoneFournisseur' => '0522954800',
            'emailFournisseur' => 'bayer@fournisseur.fake',
        ]);
		DB::table('fournisseurs')->insert(
		[
            'nomFournisseur' => 'CIPLA',
            'adresseFournisseur' => '33, av Hassan Seghir, 7°ét. bur. 7-1 Mers Sultan	CASABLANCA',
            'telephoneFournisseur' => '0522454610',
            'emailFournisseur' => 'cipla@fournisseur.fake',
        ]);
		DB::table('fournisseurs')->insert(
		[
            'nomFournisseur' => 'COOPER PHARMA',
            'adresseFournisseur' => '41,rue Mohammed Diouri Casablanca',
            'telephoneFournisseur' => '0522305116',
            'emailFournisseur' => 'cooper.pharma@fournisseur.fake',
        ]
		);
    }
}
