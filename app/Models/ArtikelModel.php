<?php
namespace App\Models;
use CodeIgniter\Model;
class artikelmodel extends Model
{
	protected $table = 'artikel';
	protected $primaryKey = 'id';
	protected $useAutoIncrement = true;
	protected $allowedFields = ['judul', 'isi', 'status', 'slug', 'gambar'];
}