<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of queries
 *
 * @author Pradipta
 */
class queries extends CI_Controller {
        public function __construct() {
        parent::__construct();
        $this->load->model('Queries_model');
        $this->load->helper('url_helper');
    }
    
    public function findtechnicians(){
        $data['technicians_by_store'] = $this->Queries_model->get_technicians_by_store();
        $data['title'] ='Technician Names by Store';
        
        $this->load->view('templates/header', $data);
        $this->load->view('queries/findtechnicians', $data);
        $this->load->view('templates/footer');
    }
    
     public function findquantitybystore(){
        $data['quantity_by_store'] = $this->Queries_model->get_quantity_by_store();
        $data['title'] ='Quantity by Store';
        
        $this->load->view('templates/header', $data);
        $this->load->view('queries/findquantitybystore', $data);
        $this->load->view('templates/footer');
    }
}
