<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(
		[
            'name' => 'Admin ADMIN',
            'email' => 'admin@asklepios.fake',
            'password' => bcrypt('12345678'),
        ]);
		DB::table('users')->insert(
		[
            'name' => 'Hamza HRID',
            'email' => 'hrid.h@asklepios.fake',
            'password' => bcrypt('12345678'),
        ]);
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
