<?php

namespace App\Models;

use CodeIgniter\Database\Query;
use CodeIgniter\Model;

class data_individu_model extends Model
{
    protected $table      = 'data_individu';
    protected $primaryKey = 'nik';
    // protected $returnType = 'array';

    public function get_keluarga($no_kk)
    {
        // $sql = $this->db->query('select * from data_individu where data_individu.no_kk =' . $no_kk);
        // $sql->getResult();
        // return $sql;
        $db = \Config\Database::connect();
        $sql = $db->table('data_individu');
        $sql = $sql->where('no_kk', $no_kk);
        $sql = $sql->get()->getResult();
        return $sql;
    }

    public function get_kelg($no_kk)
    {
        // $sql = $this->db->query('select * from data_individu where data_individu.no_kk =' . $no_kk);
        // $sql->getResult();
        // return $sql;
        $db = \Config\Database::connect();
        $sql = $db->table('data_individu');
        $sql = $sql->where('no_kk', $no_kk);
        $sql = $sql->get()->getResultArray();
        return $sql;
    }
    

    public function get_kepala($no_kk)
    {
        $db = \Config\Database::connect();
        $sql = "select data_individu.nama_lengkap
        from (data_individu 
        inner join data_kk
        on data_kk.nik_kepala_keluarga = data_individu.nik
        and data_kk.no_kartu_keluarga = :no_kk:)";
        $sql =
            // $db->query(
            //     $sql, $no_kk
            // );
            $db->query($sql, [
                'no_kk'   => $no_kk
            ]);
        $sql = $sql->getFirstRow();
        return $sql;
    }

    public function get_kpl($no_kk)
    {
        $db = \Config\Database::connect();
        $sql = "select data_individu.nama_lengkap
        from (data_individu 
        inner join data_kk
        on data_kk.nik_kepala_keluarga = data_individu.nik
        and data_kk.no_kartu_keluarga = :no_kk:)";
        $sql =
            // $db->query(
            //     $sql, $no_kk
            // );
            $db->query($sql, [
                'no_kk'   => $no_kk
            ]);
        $sql = $sql->getFirstRow('array');
        return $sql;
    }

    public function save_idv($data)
    {
        // $query = 
        $this->db->table('data_individu')->insert($data);
        // return $query;
    }

    public function update_idv($data, $nik)
    {
        $query = $this->db->table('data_individu')->update($data, array('nik' => $nik));
        return $query;
    }

    public function delete_idv($nik)
    {
        $query = $this->db->table('data_individu')->delete(array('nik' => $nik));
        return $query;
    }
}
