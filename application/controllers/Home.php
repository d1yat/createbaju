<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author CODE.ID
 */
class Home extends MY_Controller {
    public function index() {
//        $this->load->model('Employee');
        $employees = array(
            array('lastName' => 'Fasehan', 'firstName' => 'Ahmad'),
            array('lastName' => 'Firmansyah', 'firstName' => 'Andris'),
            array('lastName' => 'Sudiyat', 'firstName' => 'Akhirudin'),
            array('lastName' => 'Arham', 'firstName' => 'Bani'),
            array('lastName' => 'Raudho', 'firstName' => 'Rido'),
        );
//                $this->Employee->get_employees();
        $data['employees'] = $employees;
        $data['content'] = 'pages/home';
        $this->load->view($this->layout, $data);
    }
    
    public function about() {
        $data['content'] = 'pages/about';
        $this->load->view($this->layout, $data);
    }
}
