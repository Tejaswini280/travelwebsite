<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['name', 'email', 'password'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'date';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
}