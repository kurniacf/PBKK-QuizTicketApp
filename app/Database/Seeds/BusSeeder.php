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
                'total_seats' => 60
            ],
            [
                'bus_name' => 'Sinar Jaya',
                'bus_type' => 'medium',
                'total_seats' => 50
            ],
            [
                'bus_name' => 'Lorena',
                'bus_type' => 'large',
                'total_seats' => 60
            ],
            [
                'bus_name' => 'Rosalia Indah',
                'bus_type' => 'large',
                'total_seats' => 60
            ],
            [
                'bus_name' => 'Safari Dharma Raya',
                'bus_type' => 'medium',
                'total_seats' => 50
            ],
            [
                'bus_name' => 'Po. Haryanto',
                'bus_type' => 'medium',
                'total_seats' => 50
            ],
            [
                'bus_name' => 'Gunung Harta',
                'bus_type' => 'large',
                'total_seats' => 60
            ],
            [
                'bus_name' => 'Handoyo',
                'bus_type' => 'medium',
                'total_seats' => 50
            ],
            [
                'bus_name' => 'Tentrem',
                'bus_type' => 'large',
                'total_seats' => 60
            ],
            [
                'bus_name' => 'Eka',
                'bus_type' => 'large',
                'total_seats' => 60
            ],
        ];

        // Using Query Builder
        $this->db->table('buses')->insertBatch($data);
    }
}
