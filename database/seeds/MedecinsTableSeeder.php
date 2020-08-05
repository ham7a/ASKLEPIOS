<?php

use Illuminate\Database\Seeder;

class MedecinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('medecins')->insert(
		[
            'nomMedecin' => 'Shaheer Demian',
            'specialiteMedecin' => 'Généraliste',
            'adresseMedecin' => 'Tour d\'Ivoire 1, 3° Etage Bd des Almohades 20030 Casablanca',
            'telephoneMedecin' => '0522954800',
            'emailMedecin' => 'demian.s@medecin.fake',
        ]);
		DB::table('medecins')->insert(
		[
            'nomMedecin' => 'Faraah Saidi',
            'specialiteMedecin' => 'Généraliste',
            'adresseMedecin' => '33, av Hassan Seghir, 7°ét. bur. 7-1 Mers Sultan	CASABLANCA',
            'telephoneMedecin' => '0522454610',
            'emailMedecin' => 'saidi.f@medecin.fake',
        ]);
		DB::table('medecins')->insert(
		[
            'nomMedecin' => 'Mahdhoodha Abood',
            'specialiteMedecin' => 'Généraliste',
            'adresseMedecin' => '41,rue Mohammed Diouri Casablanca',
            'telephoneMedecin' => '0522305116',
            'emailMedecin' => 'abood.m@medecin.fake',
        ]
		);
    }
}
