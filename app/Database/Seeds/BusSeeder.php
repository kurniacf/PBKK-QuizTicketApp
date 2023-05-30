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
                'start_location' => 'Jakarta',
                'destination_location' => 'Surabaya',
                'start_time' => '2023-05-29 07:35:00',
                'destination_time' => '2023-05-29 20:15:00',
                'distance' => 750,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Sinar Jaya',
                'bus_type' => 'medium',
                'total_seats' => 45,
                'price' => 200000,
                'start_location' => 'Jakarta',
                'destination_location' => 'Semarang',
                'start_time' => '2023-05-27 12:35:00',
                'destination_time' => '2023-05-27 19:15:00',
                'distance' => 400,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Lorena',
                'bus_type' => 'medium',
                'total_seats' => 40,
                'price' => 85000,
                'start_location' => 'Surabaya',
                'destination_location' => 'Malang',
                'start_time' => '2023-05-15 08:35:00',
                'destination_time' => '2023-05-15 09:45:00',
                'distance' => 150,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'bus_name' => 'Rosalia Indah',
                'bus_type' => 'large',
                'total_seats' => 55,
                'price' => 150000,
                'start_location' => 'Surabaya',
                'destination_location' => 'Yogyakarta',
                'start_time' => '2023-05-20 09:35:00',
                'destination_time' => '2023-05-20 13:45:00',
                'distance' => 330,
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // Using Query Builder
        $this->db->table('buses')->insertBatch($data);
    }
}
