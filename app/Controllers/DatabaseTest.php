<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseTest extends Controller
{
    public function index()
    {
        // Manual DB connection
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'pbkk_quiz');

        if ($conn) {
            echo 'Successfully connected to the database.';
        } else {
            echo 'Failed to connect to the database.';
        }

        // Close the connection
        mysqli_close($conn);
    }
}
