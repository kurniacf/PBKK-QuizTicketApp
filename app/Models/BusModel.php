<?php
namespace App\Models;

use CodeIgniter\Model;

class BusModel extends Model
{
    protected $table = 'buses';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['bus_name', 'bus_type', 'total_seats'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
