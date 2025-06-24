<?php
/**
 * Geo POS -  Accounting,  Invoicing  and CRM Application
 * Copyright (c) Rajesh Dukiya. All Rights Reserved
 * ***********************************************************************
 *
 *  Email: support@ultimatekode.com
 *  Website: https://www.ultimatekode.com
 *
 *  ************************************************************************
 *  * This software is furnished under a license and may be used and copied
 *  * only  in  accordance  with  the  terms  of such  license and with the
 *  * inclusion of the above copyright notice.
 *  * If you Purchased from Codecanyon, Please read the full License from
 *  * here- http://codecanyon.net/licenses/standard/
 * ***********************************************************************
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Lgn_model extends CI_Model
{
    var $table = 'geopos_lgn';

    public function __construct()
    {
        parent::__construct();
    }

    function get_table() {
        $table = "geopos_lgn";
        return $table;
    }
    public function index()
    {
        $this->db->select('*');
        $this->db->from('geopos_lgn');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function _insert($data){
        $table = $this->get_table(); 
        $this->db->insert($table, $data);

        // if ($this->db->insert($table, $data)) {            
        //     echo json_encode(array('status' => 'Success', 'message' =>
        //         $this->lang->line('ADDED'). "  <a href='".base_url('lgn')."' class='btn btn-blue btn-lg'><span class='fa fa-list-alt' aria-hidden='true'></span>  </a> <a href='add' class='btn btn-info btn-lg'><span class='fa fa-plus-circle' aria-hidden='true'></span>  </a>"));
        // } else {
        //     echo json_encode(array('status' => 'Error', 'message' =>
        //         $this->lang->line('ERROR')));
        // }
    }

    function _update($id, $data) {


        $table = $this->get_table();
        $this->db->where('id', $id);
        $this->db->update($table, $data);        
        // if($this->db->update($table, $data)){
        //      echo json_encode(array('status' => 'Success', 'message' =>
        //         $this->lang->line('UPDATED')));
        //  }else{
        //     echo json_encode(array('status' => 'Error', 'message' =>
        //         $this->lang->line('ERROR')));
        //  }
    }

    function _delete($id) {
        $table = $this->get_table();
        $this->db->where('id', $id);
        //$this->db->delete($table);
        if($this->db->delete($table)){
            echo json_encode(array('status' => 'Success', 'message' =>
                $this->lang->line('DELETED')));
        } else {
            echo json_encode(array('status' => 'Error', 'message' =>
                $this->lang->line('ERROR')));
        }
    }

    function get_max() {
        $table = $this->get_table();
        $this->db->select_max('id');
        $query = $this->db->get($table);
        $row=$query->row();
        $id=$row->id;
        return $id;
    }
    function get_where($id) {
        $table = $this->get_table();
        $this->db->where('id', $id);
        $query=$this->db->get($table);
        return $query->row_array();
    }
}