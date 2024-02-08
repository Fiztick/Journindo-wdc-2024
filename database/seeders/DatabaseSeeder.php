<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('islands')->insert([
            [
                'name' => 'Sumatra',
            ],
            [
                'name' => 'Jawa',
            ],
            [
                'name' => 'Nusa Tenggara'
            ],
            [
                'name' => 'Kalimantan'
            ],
            [
                'name' => 'Sulawesi'
            ],
            [
                'name' => 'Kepulauan Maluku'
            ],
            [
                'name' => 'Papua'
            ],
        ]);

        DB::table('regions')->insert([
            [
                'name' => 'Aceh',
                'island_id' => 1,
            ],
            [
                'name' => 'Sumatra Utara',
                'island_id' => 1
            ],
            [
                'name' => 'Sumatra Barat',
                'island_id' => 1
            ],
            [
                'name' => 'Riau',
                'island_id' => 1
            ],
            [
                'name' => 'Jambi',
                'island_id' => 1
            ],
            [
                'name' => 'Bengkulu',
                'island_id' => 1
            ],
            [
                'name' => 'Lampung',
                'island_id' => 1
            ],
            [
                'name' => 'Bangka Belitung',
                'island_id' => 1
            ],
            [
                'name' => 'Kepulauan Riau',
                'island_id' => 1
            ],
            [
                'name' => 'DKI Jakarta',
                'island_id' => 2
            ],
            [
                'name' => 'Jawa Barat',
                'island_id' => 2
            ],
            [
                'name' => 'Jawa Tengah',
                'island_id' => 2
            ],
            [
                'name' => 'Daerah Istimewa Yogyakarta',
                'island_id' => 2
            ],
            [
                'name' => 'Jawa Timur',
                'island_id' => 2
            ],
            [
                'name' => 'Bali',
                'island_id' => 3
            ],
            [
                'name' => 'Nusa Tenggara Barat',
                'island_id' => 3
            ],
            [
                'name' => 'Nusa Tenggara Timur',
                'island_id' => 3
            ],
            [
                'name' => 'Kalimantan Barat',
                'island_id' => 4
            ],
            [
                'name' => 'Kalimantan Tengah',
                'island_id' => 4
            ],
            [
                'name' => 'Kalimantan Selatan',
                'island_id' => 4
            ],
            [
                'name' => 'Kalimantan Timur',
                'island_id' => 4
            ],
            [
                'name' => 'Sulawesi Utara',
                'island_id' => 5
            ],
            [
                'name' => 'Sulawesi Tengah',
                'island_id' => 5
            ],
            [
                'name' => 'Sulawesi Selatan',
                'island_id' => 5
            ],
            [
                'name' => 'Sulawesi Tenggara',
                'island_id' => 5
            ],
            [
                'name' => 'Sulawesi Barat',
                'island_id' => 5
            ],
            [
                'name' => 'Maluku Utara',
                'island_id' => 6
            ],
            [
                'name' => 'Maluku',
                'island_id' => 6
            ],
            [
                'name' => 'Papua',
                'island_id' => 7
            ],
            [
                'name' => 'Papua Barat',
                'island_id' => 7
            ],
            [
                'name' => 'Papua Tengah',
                'island_id' => 7
            ],
            [
                'name' => 'Papua Pegunungan',
                'island_id' => 7
            ],
            [
                'name' => 'Papua Selatan',
                'island_id' => 7
            ],
            [
                'name' => 'Papua Barat Daya',
                'island_id' => 7
            ],
        ]);

        DB::table('images')->insert([
            [
                'name' => 'Masjid Raya Baiturrahman',
                'path' => 'img/masjid-raya-baiturrahman.webp',
                'region_id' => '1',
            ],
            [
                'name' => 'Danau Toba',
                'path' => 'img/danau-toba.jpg',
                'region_id' => '2',
            ],
            [
                'name' => 'Jam Gadang',
                'path' => 'img/jam-gadang.jpg',
                'region_id' => '3',
            ],
            [
                'name' => 'Istana Siak Sri Indrapura',
                'path' => 'img/istana-siak-sri-indrapura.jpeg',
                'region_id' => '4',
            ],
            [
                'name' => 'Tugu Keris Siginjai',
                'path' => 'img/tugu-keris-siginjai.jpeg',
                'region_id' => '5',
            ],
            [
                'name' => 'Benteng Malborough',
                'path' => 'img/benteng-malborough.jpg',
                'region_id' => '6',
            ],
            [
                'name' => 'Taman Nasional Way Kambas',
                'path' => 'img/taman-nasional-way-kambas.jpeg',
                'region_id' => '7',
            ],
            [
                'name' => 'Danau Kaolin',
                'path' => 'img/danau-kaolin.jpg',
                'region_id' => '8',
            ],
            [
                'name' => 'Gurun Pasir Bintan',
                'path' => 'img/gurun-pasir-bintan.jpg',
                'region_id' => '9',
            ],
            [
                'name' => 'Monas',
                'path' => 'img/monas.jpg',
                'region_id' => '10',
            ],
            [
                'name' => 'Kebun Raya Bogor',
                'path' => 'img/kebun-raya-bogor.webp',
                'region_id' => '11',
            ],
            [
                'name' => 'Candi Borobudur',
                'path' => 'img/candi-borobudur.jpeg',
                'region_id' => '12',
            ],
            [
                'name' => 'Taman Sari',
                'path' => 'img/taman-sari.webp',
                'region_id' => '13',
            ],
            [
                'name' => 'Gunung Bromo',
                'path' => 'img/gunung-bromo.jpg',
                'region_id' => '14',
            ],
            [
                'name' => 'Tanah Lot',
                'path' => 'img/tanah-lot.jpg',
                'region_id' => '15',
            ],
            [
                'name' => 'Bukit Merese',
                'path' => 'img/bukit-merese.avif',
                'region_id' => '16',
            ],
            [
                'name' => 'Pulau Komodo',
                'path' => 'img/pulau-komodo.jpg',
                'region_id' => '17',
            ],
        ]);
    }
}
