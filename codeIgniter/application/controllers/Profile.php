<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set('Europe/Paris');

class Profile extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Compte utilisateur';

        if ($this->auth_user->is_connected) {
            $this->load->view('common/header', $data);
            $this->load->view('profile/index', $data);
            $this->load->view('common/footer', $data);
        } else {
            redirect('index');
        };
    }
};
