<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Queries_model
 *
 * @author Pradipta
 */
class Queries_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_technicians_by_store(){
        $sql= "select t.tname,s.sadd from technician t,store s 
            where t.sname=s.sname and s.sname='stonebriar'";
        $query=$this->db->query($sql);
        
        return $query->result();
    }
      public function get_quantity_by_store(){
        $sql= "SELECT p.sname, SUM( quantity ) AS squantity FROM phone p INNER JOIN iphone6 i6 ON p.imei = i6.imei GROUP BY p.sname HAVING p.sname = 'knox' ORDER BY p.sname";
        $query=$this->db->query($sql);
        
        return $query->result();
    }
}

