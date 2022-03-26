<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use CodeIgniter\I18n\Time;

class OrangSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'Rizqa Alfiani',
        //         'alamat'    => 'Jl. Raya Cisitu',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'nama' => 'sanjaya',
        //         'alamat'    => 'Jl. juga',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],
        //     [
        //         'nama' => 'mollly',
        //         'alamat'    => 'Jl. iya',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now(),
        //     ],

        // ];

        // Simple Queries-manual
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder-otomatis
        // hanya insert satu data, klo data banyak akan error
        // $this->db->table('orang')->insert($data);

        // insert banyak data
        // $this->db->table('orang')->insertBatch($data);

        // penggunaan faker
        // bisa menggunakan lokalisasi, data dari negara mana
        // contoh id_ID adalah indonesia
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ];
            $this->db->table('orang')->insert($data);
        }
    }
}
