<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["name"=> "Nanggroe Aceh Darussalam", "slug"=> "nanggroe-aceh-darussalam"],
            ["name"=> "Sumatera Utara", "slug"=> "sumatera-utara"],
            ["name"=> "Sumatera Barat", "slug"=> "sumatera-barat"],
            ["name"=> "Riau", "slug"=> "riau"],
            ["name"=> "Jambi", "slug"=> "jambi"],
            ["name"=> "Sumatera Selatan", "slug"=> "sumatera-selatan"],
            ["name"=> "Bengkulu", "slug"=> "bengkulu"],
            ["name"=> "Lampung", "slug"=> "lampung"],
            ["name"=> "Bangka Belitung", "slug"=> "bangka-belitung"],
            ["name"=> "Kepulauan Riau", "slug"=> "kepulauan-riau"],
            ["name"=> "DKI Jakarta", "slug"=> "dki-jakarta"],
            ["name"=> "Jawa Barat", "slug"=> "jawa-barat"],
            ["name"=> "Jawa Tengah", "slug"=> "jawa-tengah"],
            ["name"=> "Daerah Istimewa Yogyakarta", "slug"=> "daerah-istimewa-yogyakarta"],
            ["name"=> "Jawa Timur", "slug"=> "jawa-timur"],
            ["name"=> "Banten", "slug"=> "banten"],
            ["name"=> "Bali", "slug"=> "bali"],
            ["name"=> "Nusa Tenggara Barat", "slug"=> "nusa-tenggara-barat"],
            ["name"=> "Nusa Tenggara Timur", "slug"=> "nusa-tenggara-timur"],
            ["name"=> "Kalimantan Barat", "slug"=> "kalimantan-barat"],
            ["name"=> "Kalimantan Selatan", "slug"=> "kalimantan-selatan"],
            ["name"=> "Kalimantan Tengah", "slug"=> "kalimantan-tengah"],
            ["name"=> "Kalimantan Timur", "slug"=> "kalimantan-timur"],
            ["name"=> "Kalimantan Utara", "slug"=> "kalimantan-utara"],
            ["name"=> "Sulawesi Utara", "slug"=> "sulawesi-utara"],
            ["name"=> "Sulawesi Tengah", "slug"=> "sulawesi-tengah"],
            ["name"=> "Sulawesi Selatan", "slug"=> "sulawesi-selatan"],
            ["name"=> "Sulawesi Tenggara", "slug"=> "sulawesi-tenggara"],
            ["name"=> "Gorontalo", "slug"=> "gorontalo"],
            ["name"=> "Sulawesi Barat", "slug"=> "sulawesi-barat"],
            ["name"=> "Maluku", "slug"=> "maluku"],
            ["name"=> "Maluku Utara", "slug"=> "maluku-utara"],
            ["name"=> "Papua", "slug"=> "papua"],
            ["name"=> "Papua Barat", "slug"=> "papua-barat"],
            ["name"=> "Papua Barat Daya", "slug"=> "papua-barat-daya"],
            ["name"=> "Papua Pegunungan", "slug"=> "papua-pegunungan"],
            ["name"=> "Papua Selatan", "slug"=> "papua-selatan"],
            ["name"=> "Papua Tengah", "slug"=> "papua-tengah"]
        ];
        DB::table('provinsis')->insert($data);
    }
}
