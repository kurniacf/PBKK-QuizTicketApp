<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'bus_name' => 'Pahala Kencana',
                'bus_type' => 'large',
                'total_seats' => 60,
                'price' => 250000,
                'departure_location' => 'Jakarta',
                'arrival_location' => 'Surabaya',
                'departure_time' => '2023-05-29 07:35:00',
                'arrival_time' => '2023-05-29 20:15:00',
                'distance' => 750,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Sinar Jaya',
                'bus_type' => 'medium',
                'total_seats' => 45,
                'price' => 200000,
                'departure_location' => 'Jakarta',
                'arrival_location' => 'Semarang',
                'departure_time' => '2023-05-27 12:35:00',
                'arrival_time' => '2023-05-27 19:15:00',
                'distance' => 400,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Lorena',
                'bus_type' => 'medium',
                'total_seats' => 40,
                'price' => 85000,
                'departure_location' => 'Surabaya',
                'arrival_location' => 'Malang',
                'departure_time' => '2023-05-15 08:35:00',
                'arrival_time' => '2023-05-15 09:45:00',
                'distance' => 150,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Rosalia Indah',
                'bus_type' => 'large',
                'total_seats' => 55,
                'price' => 150000,
                'departure_location' => 'Surabaya',
                'arrival_location' => 'Yogyakarta',
                'departure_time' => '2023-05-20 09:35:00',
                'arrival_time' => '2023-05-20 13:45:00',
                'distance' => 330,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // Using Query Builder
        $this->db->table('buses')->insertBatch($data);
    }
}
