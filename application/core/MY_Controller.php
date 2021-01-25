<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MY_CONTROLLER extends CI_Controller {
	
	protected $pageData = array();

	public function __construct(){
		parent::__construct();
	}

	public function admin_layout(){
		$this->layout = array(
			'head_load' => $this->load->view('layout/admin/head_load', $this->pageData, TRUE),
			'foot_load' => $this->load->view('layout/admin/foot_load', $this->pageData, TRUE),
			'header' 	=> $this->load->view('layout/admin/header', $this->pageData, TRUE),
			'sidebar' 	=> $this->load->view('layout/admin/sidebar', $this->pageData, TRUE),
			'footer' 	=> $this->load->view('layout/admin/footer', $this->pageData, TRUE),
			'content' 	=> $this->load->view($this->page, $this->pageData, TRUE),
		);
		$this->load->view('layout/admin/base_layout', $this->layout);
	}

	public function visitor_layout(){
		$this->layout = array(
			'head_load' => $this->load->view('layout/visitor/vhead_load', $this->pageData, TRUE),
			'foot_load' => $this->load->view('layout/visitor/vfoot_load', $this->pageData, TRUE),
			'navbar' 	=> $this->load->view('layout/visitor/vnavbar', $this->pageData, TRUE),
			'content' 	=> $this->load->view($this->page, $this->pageData, TRUE),
		);
		$this->load->view('layout/visitor/vbase_layout', $this->layout);
	}
}