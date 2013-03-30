<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ctajx extends CI_Controller {

    //Registration form check username 
    public function check_user() {
        $this->load->model('user_model');

        if ($this->input->post('user_name')) {
            $user_name = $this->input->post('user_name');
            if ($this->user_model->check_username($user_name)) {
                echo "<span  class = 'label label-important' id = 'login_taken'>Lietotājvārds $user_name ir aiņemts!</span  >";
            }else
                echo 'OK';
        }
    }

    //Registration form check email 
    public function check_email() {
        $this->load->model('user_model');

        if ($this->input->post('email')) {
            $email = $this->input->post('email');
            if ($this->user_model->check_email($email)) {
                echo "<span  class = 'label label-important' id = 'email_taken'>E-pasts $email ir aiņemts!</span  >";
            }else
                echo 'OK';
        }
    }

}

?>