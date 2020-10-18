<?php

namespace App\Models;

use CodeIgniter\Model;

class data_kk_model extends Model
{
    protected $table      = 'data_kk';
    protected $primaryKey = 'no_kartu_keluarga';
    // protected $returnType = 'array';

    // campurin data individu dan kk disini
    // public function FunctionName(Type $var = null)
    // {
    //     # code...
    // }

    public function save_kk($data)
    {
        // $query = 
        $this->db->table('data_kk')->insert($data);
        // return $query;
    }

    public function update_kk($data, $no_kk)
    {
        $query = $this->db->table('data_kk')->update($data, array('no_kartu_keluarga' => $no_kk));
        return $query;
    }

    public function delete_kk($no_kk)
    {
        $query = $this->db->table('data_kk')->delete(array('no_kartu_keluarga' => $no_kk));
        return $query;
    }
}
