<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

class Experience_m extends CI_Model {
    
    protected $tb = 'my_experience';
    protected $f  = array(
        '0' => 'exp_id',
        '1' => 'exp_name',
        '2' => 'exp_periode_begin',
        '3' => 'exp_periode_end',
        '4' => 'exp_status',
        '5' => 'exp_description'
    ); 

    /** Insert Experience */
    function insertExperience($post){
        $resultInsert = $this->db->insert($this->tb, $post);
        return $resultInsert;
    }

    /** Get all experience data */
    function getExperience(){
        $this->db->order_by($this->f[2], 'DESC');
        $resultSelect = $this->db->get($this->tb);
        return $resultSelect->result_array();
    }

    /** Get experience data on id */
    function getExperienceOnID($id){
        $this->db->where($this->f[0], $id);
        $resultSelect = $this->db->get($this->tb);
        return $resultSelect->result_array();
    }

    /** Update experience data */
    function updateExperience($data, $id){
        $this->db->set($data);
        $this->db->where($this->f[0], $id);
        $resultUpdate = $this->db->update($this->tb);
        return $resultUpdate;
    }

    /* Query delete data */
    function deleteExperience($id){
        $resultDelete = $this->db->delete($this->tb, array($this->f[0] => $id));
        return $resultDelete;
    }
}