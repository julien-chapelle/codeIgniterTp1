<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
    public function index() {
        $data["title"] = "Page d'accueil";

        $this->load->view('common/header', $data);
        $this ->load->view ('Accueil/index');
        $this->load->view('common/footer', $data);
    }
}
