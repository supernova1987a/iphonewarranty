<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author Pradipta
 */
class Customer extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->helper('url_helper');
    }
    
    public function index(){
        $data['customer'] = $this->Customer_model->get_customers();
        $data['title'] = 'Customer Information';
        
        $this->load->view('templates/header', $data);
        $this->load->view('customer/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function view($cID = NULL){
        $data['customer_item']=$this->Customer_model->get_customers($cID);
        $data['title'] = 'Your selected customer:';
        if (empty($data['customer_item'])){
            show_404();
        }
        $data['cName'] = $data['customer_item']['cName'];
        
        $this->load->view('templates/header', $data);
        $this->load->view('customer/view', $data);
        $this->load->view('templates/footer', $data);
    }
    //put your code here
}
