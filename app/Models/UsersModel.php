<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'email', 'password'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = ['name' => 'required', 'email' => 'required|valid_email|is_unique[users.email]', 'password' => 'required|min_length[8]|max_length[255]'];
    protected $validationMessages   = ['name' => ['required' => 'Name field is required'], 'email' => ['required' => 'Email field is required', 'valid_email' => 'Email field must be a valid email', 'is_unique' => 'Email field must be unique'], 'password' => ['required' => 'Password field is required', 'min_length' => 'Password field must have at least 8 characters', 'max_length' => 'Password field must have at most 255 characters']];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
