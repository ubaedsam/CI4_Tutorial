<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 20; $i++) {

            $data = [
                'product_name' => $faker->name,
                'product_description' => $faker->text($maxNbChars = 200),
            ];
            print_r($data);
            $this->db->table('product')->insert($data);
        }
    }
}
