<?php namespace App\Models;

use CodeIgniter\Model;

class anggota_keluarga_model extends Model
{
    protected $table      = 'anggota_keluarga';
    protected $primaryKey = 'no_kk_ak';
    protected $returnType = 'array';
}