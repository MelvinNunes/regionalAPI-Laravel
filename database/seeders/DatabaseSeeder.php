<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Provinces

        DB::table('provinces')->insert([
            'id' => 1,
            'province_name' => 'Cidade de Maputo',
            'acronym' => 'MPC',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 2,
            'province_name' => 'Maputo',
            'acronym' => 'MPT',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 3,
            'province_name' => 'Xai-Xai',
            'acronym' => 'XAI',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        DB::table('provinces')->insert([
            'id' => 4,
            'province_name' => 'Gaza',
            'acronym' => 'GZA',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 5,
            'province_name' => 'Inhambane',
            'acronym' => 'INH',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 6,
            'province_name' => 'Manica',
            'acronym' => 'MNC',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 7,
            'province_name' => 'Sofala',
            'acronym' => 'SFL',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 8,
            'province_name' => 'Tete',
            'acronym' => 'TET',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 9,
            'province_name' => 'Nampula',
            'acronym' => 'NPL',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 10,
            'province_name' => 'Niassa',
            'acronym' => 'NIA',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 11,
            'province_name' => 'Cabo Delgado',
            'acronym' => 'CBD',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('provinces')->insert([
            'id' => 12,
            'province_name' => 'Zambézia',
            'acronym' => 'ZMB',
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // DISTRICTS

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaMpfumo',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de Nlhamankulu',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaMaxaquene',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaMavota',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaTembe',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaMubukwana',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Distrito de KaNyaka',
            'province_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Boane',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Magude',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Manhiça',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Marracune',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Matola',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Moamba',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Namaacha',
            'province_id' => 2,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Bilene',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chibuto',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chicualacuala',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chigubo',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chókwè',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chongoene',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Guijá',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Limpopo',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mabalane',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Manjacaze',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mapai',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Massangena',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Xai-Xai',
            'province_id' => 4,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Funhalouro',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Govuro',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Homoíne',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Inhambane',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Inharrime',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Inhassoro',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Jangamo',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mabote',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Maxixe',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Morrumbene',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Panda',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Vinlanculos',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Zavala',
            'province_id' => 5,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Bárue',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chimoio',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Gondola',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Guro',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Macate',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Machaze',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Macossa',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Manica',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mossurize',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Sussundenga',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Tambara',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Vanduzi',
            'province_id' => 6,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Beira',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Búzi',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Caia',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chemba',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Cheringoma',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Dondo',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Gorongosa',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Machanga',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Maringué',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Marromeu',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Muanza',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nhamatanda',
            'province_id' => 7,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Angónia',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Cahora-Bassa',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chanagara',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chifunde',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chiuta',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Dôa',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Macanga',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Magoé',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Marara',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Marávia',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Moatize',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mutarara',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Tete',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Tsangano',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Zumbo',
            'province_id' => 8,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Angoche',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Eráti',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Ilha de Moçambique',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Lalaua',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Larde',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Liúpo',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Malema',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Meconta',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mongincual',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mogovolas',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Moma',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Monapo',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mossuril',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Muecate',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Morrupula',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nacala-a-Velha',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nacala-Porto',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nacarôa',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nampula',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Rapale',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Ribaué',
            'province_id' => 9,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chimbonila',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Cuamba',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Lago',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Lichinga',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Majune',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mandimba',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Marrupa',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Maúa',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mavago',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mecanhelas',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mecula',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Metarica',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Muembe',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'N´gauma',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nipepe',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Sanga',
            'province_id' => 10,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Ancuabe',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Balama',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chiúre',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Ibo',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Macomia',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mecúfi',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Meluco',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Metuge',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mocimboa da Praia',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Montepuez',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mueda',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Muidume',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Namuno',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nangade',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Pemba',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Quissanga',
            'province_id' => 11,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Alto Molócue',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Chinde',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Derre',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Gilé',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Gurué',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Ile',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Inhassunge',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Luabo',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Lugela',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Maganja da Costa',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Milange',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mocuba',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Molumbo',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mopeia',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Morrumbala',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Mulevala',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Namarroi',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Nicoadala',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Pebane',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('districts')->insert([
            'district_name' => 'Quelimane',
            'province_id' => 12,
            'created_by' => 1,
            'updated_by' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
