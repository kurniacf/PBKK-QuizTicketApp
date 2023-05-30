<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Kurnia Cahya',
                'email' => 'admin@ticketybus.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT), // Hashed password
                'address' => 'Jl. Raya Bromo No. 7, Surabaya, Jawa Timur',
                'phone' => '08123456789',
                'role' => 'admin',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Siti Nurhaliza',
                'email' => 'siti@ticketybus.com',
                'password' => password_hash('siti123', PASSWORD_DEFAULT), // Hashed password
                'address' => 'Jl. Kediri No. 10, Malang, Jawa Timur',
                'phone' => '08123456790',
                'role' => 'user',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Rere Arga',
                'email' => 'rere@ticketybus.com',
                'password' => password_hash('agus123', PASSWORD_DEFAULT), // Hashed password
                'address' => 'Jl. Pahlawan No. 5, Surabaya, Jawa Timur',
                'phone' => '08123456791',
                'role' => 'user',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ];

        foreach ($data as $user) {
            $this->db->table('users')->insert($user);
        }
    }
}
