<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author CODE.ID
 */
class MY_Controller extends CI_Controller {
    public $layout;
    
    public function __construct() {
        parent::__construct();
        $this->layout = 'shared/layout';
    }
}
