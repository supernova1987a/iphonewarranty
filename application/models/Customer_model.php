<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer_model
 *
 * @author Pradipta
 */
class Customer_model extends CI_Model {
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_customers($cID = FALSE)
    {
        if ($cID === FALSE)
        {
                $query = $this->db->get('customer');
                return $query->result_array();
        }

        $query = $this->db->get_where('customer', array('cID' => $cID));
        return $query->row_array();
    }
}
