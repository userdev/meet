<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profile extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('header');
        $data['user'] = $this->user_model->get_user_data_by_ID($this->session->userdata('user_ID'));
        $this->load->view('user/user_left_sitebar', $data);
        $this->load->view('user/profile_edit', $data);
        $this->load->view('footer');
    }

    public function takeedit() {
        
        //Ievadlauku nosacījumi
        $this->form_validation->set_rules('name', 'Vārds', 'trim|min_length[3]|max_length[45]|xss_clean');
        $this->form_validation->set_rules('surname', 'Uzvārds', 'trim|min_length[3]|max_length[45]|xss_clean');
        //USER_ID, name, surname
        $this->user_model->update_user_info($this->session->userdata('user_ID'), $this->input->post('name'), $this->input->post('surname'));
        
    }

}

?>
