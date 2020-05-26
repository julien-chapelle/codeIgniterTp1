<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accueil extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Page d\'accueil';

        $this->load->view('common/header', $data);
        $this->load->view('accueil/index', $data);
        $this->load->view('common/footer', $data);
    }

    public function contact()
    {
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Contact';

        $this->form_validation->set_rules('name', 'Nom', 'required');
        $this->form_validation->set_rules('email', 'Mail', array('valid_email', 'required'));
        $this->form_validation->set_rules('email_confirme', 'Confirmer Mail', array('valid_email', 'required'));
        $this->form_validation->set_rules('title', 'Titre', 'required');
        $this->form_validation->set_rules('message', 'Message', 'required');

        $this->load->view('common/header', $data);
        if ($this->form_validation->run()) {
            // TODO: envoyer le mail
            $this->load->library('email');
            $this->email->from($this->input->post('email'), $this->input->post('name'));
            $this->email->to('lhp3.cjulien@gmail.com');
            $this->email->subject($this->input->post('title'));
            $this->email->message($this->input->post('message'));
            $this->email->send();
            $this->load->view('contact/contact_result', $data);
        } else {
            $this->load->view('contact/contact', $data);
        }
        $this->load->view('common/footer', $data);
    }

    public function about()
    {
        $data['title'] = 'À propos';

        $this->load->view('common/header', $data);
        $this->load->view('about/about', $data);
        $this->load->view('common/footer', $data);
    }
};
