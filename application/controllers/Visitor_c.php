<?php 
defined('BASEPATH') OR exit('No direct script access allowed !');

class Visitor_c extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        /** Required data displayed in view page */
        $this->pageData = array(
            'title'     => 'Welcome :: Joe\'s Zoe',
            'assets'    => array(),
        );

        /** Set view file */
        $this->page = 'visitor/home_v';

        /** Call layout function */
        $this->visitor_layout();
    }
}