<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

Class Underworld_c extends MY_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        /** Required data displayed in view page */
        $this->pageData = array(
            'title'     => 'Welcome :: Underworld',
            'assets'    => array(),
        );

        /** Set view file */
        $this->page = 'admin/dashboard_a';

        /** Call layout function */
        $this->admin_layout();
    }

    public function pageExperience(){
        $this->pageData = array(
            'title'     => 'Experience :: Underworld',
            'assets'    => array('datatables'),
        );
        $this->page = 'admin/experience_a';
        $this->admin_layout();
    }
}