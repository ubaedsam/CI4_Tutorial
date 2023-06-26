<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {

            $data = [
                'judul' => $faker->word,
                'isi_berita' => $faker->text($maxNbChars = 200),
                'gambar' => $faker->imageUrl($width = 540, $height = 380)
            ];
            print_r($data);
            $this->db->table('tbl_berita')->insert($data);
        }
    }
}
