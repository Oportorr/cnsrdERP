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

class Lgn Extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("Aauth");
        if (!$this->aauth->is_loggedin()) {
            redirect('/user/', 'refresh');
        }

        if (!$this->aauth->premission(5)) {
            exit('<h3>Sorry! You have insufficient permissions to access this section</h3>');
        }
        $this->load->model('lgn_model', 'lgn_model');
        $this->li_a = 'LGN';
    }

    public function index()
    {
        $data['list'] = $this->lgn_model->index();
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = 'LGN';
        $this->load->view('fixed/header', $head);
        $this->load->view('lgn/index', $data);
        $this->load->view('fixed/footer');
    }   

    public function add()
    {
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = $this->lang->line('add_lgn');
        $data = $this->get_data_from_post();
        $this->load->view('fixed/header', $head);
        $this->load->view('lgn/add', $data);
        $this->load->view('fixed/footer');
    }

    public function get_data_from_post(){        
        $data['series'] = $this->input->post('series', TRUE);       
        $data['business_division'] = $this->input->post('business_division', TRUE);       
        $data['emission_pt'] = $this->input->post('emission_pt', TRUE);       
        $data['printer_area'] = $this->input->post('printer_area', TRUE);       
        $data['lgn_type'] = $this->input->post('lgn_type', TRUE);       
        $data['starting_seq'] = $this->input->post('starting_seq', TRUE);       
        $data['ending_seq'] = $this->input->post('ending_seq', TRUE);       
        $data['overide_seq'] = $this->input->post('overide_seq', TRUE);       
        $data['status'] = $this->input->post('status', TRUE);
        $data['lgn_due_date'] = $this->input->post('lgn_due_date', TRUE);
        return $data;
    }


    public function Create()
    {
        $this->load->library('form_validation');
        $submit = $this->input->post("submit", TRUE);
        if($submit = $this->lang->line('add_lgn')){                       
            $data = $this->get_data_from_post();               
            $this->lgn_model->_insert($data);

            $flash_msg = "Service Successfully Added";
            $value = "<div class='alert alert-success' roll='alert'>".$flash_msg."</div>";
            $this->session->set_flashdata('item', $value);
            redirect('lgn/index');            
        }          
    }

    public function delete()
    {        
        $id = $this->input->post('deleteid');
        if ($id) {            
            $dd = $this->lgn_model->_delete($id);            
        }
    }

    public function view()
    {
        $id = $this->input->get('id');
        $data['data'] = $this->lgn_model->get_where($id);
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = $this->lang->line('view_lgn');
        $this->load->view('fixed/header', $head);
        $this->load->view('lgn/view', $data);
        $this->load->view('fixed/footer');
    }

    //view for edit
    public function edit()
    {
        $id = $this->input->get('id');
        $query = $this->lgn_model->get_where($id);
        $data['data'] = $query;
        $head['usernm'] = $this->aauth->get_user()->username;
        $head['title'] = $this->lang->line('edit_lgn');
        $this->load->view('fixed/header', $head);
        $this->load->view('lgn/edit', $data);
        $this->load->view('fixed/footer');
    }

    public function editlgn()
    {
        $id = $this->input->post('id');
        $data = $this->get_data_from_post();

        if ($id) {
            $this->lgn_model->_update($id, $data);
            redirect('lgn/index'); 
        }
    }
}