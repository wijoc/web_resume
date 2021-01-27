<?php
defined('BASEPATH') OR exit('No direct script access allowed !');

Class Experience_c extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Experience_m');
    }

    public function index(){
        /** Required data displayed in view page */
        $this->pageData = array(
            'title'     => 'Experience :: Underworld',
            'assets'    => array('datatables', 'sweetalert2'),
            'dataExp'   => $this->Experience_m->getExperience() // Get all data Experience
        );

        /** Set view file */
        $this->page = 'admin/experience_a';

        /** Call layout function */
        $this->admin_layout();
    }

  /** Add data */
    /** Page : Add experience page */
    public function pageAddExperience(){
        $this->pageData = array(
            'title'     => 'Experience :: Underworld',
            'assets'    => array('sweetalert2'),
        );
        $this->page = 'admin/experience_add_a';
        $this->admin_layout();
    }

    /** Function : Add Experience Proses */
    function addExperienceProses(){
        /** Get post data from form */
        $dataPost = array(
            'exp_name'          => $this->input->post('postNameExp'),
            'exp_periode_begin' => $this->input->post('postPeriodeA'),
            'exp_periode_end'   => $this->input->post('postPeriodeB'),
            'exp_status'        => $this->input->post('postStatusExp'),
            'exp_description'   => $this->input->post('postDeskripsiExp')
        );

        /** Input to database proses */
        $inputExp = $this->Experience_m->insertExperience($dataPost);

        /** Set session flashdata and redirect */
        if($inputExp > 0){
            $this->session->set_flashdata('flashStatus', 'success');
	  		$this->session->set_flashdata('flashMsg', 'Berhasil menambahkan data !');
        } else {
            $this->session->set_flashdata('flashStatus', 'error');
            $this->session->set_flashdata('flashMsg', 'Gagal menambahkan data !');
        }
        $this->session->set_flashdata('flashRedirect', 'Experience_c');

        redirect('Experience_c/pageAddExperience');
    }

  /** Edit data */
    /** Page : Edit experience page */
    public function pageEditExperience($encoded_id){
        /** Decode id */
        $expId = base64_decode(urldecode($encoded_id));

        $this->pageData = array(
            'title'     => 'Experience :: Underworld',
            'assets'    => array('sweetalert2'),
            'dataExp'   => $this->Experience_m->getExperienceOnID($expId),
            'idExp'     => $encoded_id
        );
        $this->page = 'admin/experience_edit_a';
        $this->admin_layout();
    }

    /** Function : Edit Experience Proses */
    function editExperienceProses(){
        /** Encoded id */
        $expId = base64_decode(urldecode($this->input->post('postId')));

        /** Get post data from form */
        $dataPost = array(
            'exp_name'          => $this->input->post('postNameExp'),
            'exp_periode_begin' => $this->input->post('postPeriodeA'),
            'exp_periode_end'   => $this->input->post('postPeriodeB'),
            'exp_status'        => $this->input->post('postStatusExp'),
            'exp_description'   => $this->input->post('postDeskripsiExp')
        );

        /** Input to database proses */
        $editExp = $this->Experience_m->updateExperience($dataPost, $expId);

        /** Set session flashdata and redirect */
        if($editExp > 0){
            $this->session->set_flashdata('flashStatus', 'success');
	  		$this->session->set_flashdata('flashMsg', 'Berhasil mengubah data !');
        } else {
            $this->session->set_flashdata('flashStatus', 'error');
            $this->session->set_flashdata('flashMsg', 'Gagal mengubah data !');
        }
        $this->session->set_flashdata('flashRedirect', 'Experience_c');

        redirect('Experience_c/pageEditExperience/'.$this->input->post('postId'));
    }

  /** Delete Data */
    function deleteExperienceProses($encoded_id){
        /** Decode id */
        $expId = base64_decode(urldecode($encoded_id));

        /** Proses delete data on database */
        $delExp = $this->Experience_m->deleteExperience($expId);

        /** Set session flashdata and redirect */
        if($delExp > 0){
            $this->session->set_flashdata('flashStatus', 'success');
	  		$this->session->set_flashdata('flashMsg', 'Berhasil menghapus data !');
        } else {
            $this->session->set_flashdata('flashStatus', 'error');
            $this->session->set_flashdata('flashMsg', 'Gagal menghapus data !');
        }

        redirect('Experience_c');
    }
}