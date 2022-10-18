<?php namespace App\Models;

use CodeIgniter\Model;

class model_inventaris_gudang_pipa extends Model {

    // Visualisation database data in webpage

    public function visual_gudang($table) {

        return $this->db->table($table)->get()->getResult();
        
    }

    public function visual_gudang_join($table1, $table2, $on) {

        return $this->db->table($table1)->join($table2, $on, 'left')->get()->getResult();

    }

    // --------------------------------------------------


    # Function of data insert, this function used to add a new data into the databases.

    public function insert_data($table, $into) {

        return $this->db->table($table)->insert($into);

    }

    # Function of data editing, this function used to edit a choise of data in the databases.

    public function delete_data($table, $where) {

        return $this->db->table($table)->delete($where);

    }

    # Function of data delete, this function used to remove a data from the databases.

    public function edit_data($table, $data, $where) {

        return $this->db->table($table)->update($data, $where);

    }

    public function getWhere($table, $where) {

        return $this->db->table($table)->getWhere($where)->getRow();
        
    }

    public function getWhere2($table, $where) {

        return $this->db->table($table)->getWhere($where)->getRowArray();
        
    }

}