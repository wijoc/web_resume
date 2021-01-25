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

    /** Page : Portfolio */
    public function pagePortfolio(){
        $this->pageData = array(
            'title'     => 'Portfolio :: Joe\'s Zoe',
            'assets'    => array(),
        );
        $this->page = 'visitor/portfolio_v';
        $this->visitor_layout();
    } 

    /** Page : Experience */
    public function pageExperience(){
        $this->pageData = array(
            'title'     => 'Experience :: Joe\'s Zoe',
            'assets'    => array('timeline'),
        );
        $this->page = 'visitor/experience_v';
        $this->visitor_layout();
    } 

    /** Page : About */
    public function pageAbout(){
        $this->pageData = array(
            'title'     => 'Tentang :: Joe\'s Zoe',
            'assets'    => array(),
        );
        $this->page = 'visitor/about_v';
        $this->visitor_layout();
    } 

    /** Page : Message */
    public function pageMessage(){
        $this->pageData = array(
            'title'     => 'Tinggalkan Pesan :: Joe\'s Zoe',
            'assets'    => array(),
        );
        $this->page = 'visitor/message_v';
        $this->visitor_layout();
    } 
}