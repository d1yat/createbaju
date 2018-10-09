<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author CODE.ID
 */
class Employee extends CI_Model {
    public function get_employees() {
        $query = $this->db->get('employees');
        return $query->result();
    }
}
