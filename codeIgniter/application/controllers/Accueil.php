<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
    public function index() {
        $data['title'] = 'Page d\'accueil';

        $this->load->view('common/header', $data);
        $this ->load->view('accueil/index', $data);
        $this->load->view('common/footer', $data);
    }
}
