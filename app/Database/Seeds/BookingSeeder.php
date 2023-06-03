<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'bus_id' => 1,
                'seat_number' => 15,
                'status' => 'booked',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'bus_id' => 2,
                'seat_number' => 20,
                'status' => 'booked',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 3,
                'bus_id' => 3,
                'seat_number' => 30,
                'status' => 'booked',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 2,
                'bus_id' => 4,
                'seat_number' => 10,
                'status' => 'cancelled',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'bus_id' => 2,
                'seat_number' => 5,
                'status' => 'booked',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ];

        // Using Query Builder
        $this->db->table('bookings')->insertBatch($data);
    }
}
