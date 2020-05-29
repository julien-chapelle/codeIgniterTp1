<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    function index()
    {
        $limite = 3;
        $debut = (0) * $limite;

        $this->load->helper('date');
        $this->load->model('item');
        $this->load->model('article_status');
        $this->load->model('item');
        $this->load->library('pagination');
        $this->item->load($this->auth_user->is_connected, $limite, $debut);
        
        $data['title'] = "Blog";

        $this->load->view('common/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('common/footer', $data);

    }

    public function edition($id = NULL)
    {
        if (!$this->auth_user->is_connected) {
            redirect('blog/index');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('article_status');
        $this->load->model('item_detail');

        if ($id !== NULL) {        // si identifiant donné, modification
            if (is_numeric($id)) { // vérification validité de l'identifiant
                $this->item_detail->load($id, TRUE);
                if (!$this->item_detail->is_found) {
                    redirect('blog/index');
                }
            } else {
                redirect('blog/index');
            }
            $data['title'] = "Modification article";
        } else {                  // si aucun identifiant donné, création
            $data['title'] = "Nouvel article";
            $this->item_detail->author_id = $this->auth_user->id;
        };

        $this->set_blog_post_validation();

        if ($this->form_validation->run() == TRUE) {

            $this->item_detail->content = $this->input->post('content');
            $this->item_detail->status = $this->input->post('status');
            $this->item_detail->title = $this->input->post('title');
            $this->item_detail->save();
            if ($this->item_detail->is_found) {
                redirect('blog/' . $this->item_detail->alias . '_' . $this->item_detail->id);
            }
        }
        $this->load->view('common/header', $data);
        $this->load->view('blog/form', $data);
        $this->load->view('common/footer', $data);
    }

    protected function set_blog_post_validation()
    {
        $list = join(',', $this->article_status->codes);
        $this->form_validation->set_rules('title', 'Titre', 'required|max_length[64]');
        $this->form_validation->set_rules('content', 'Texte', 'required');
        $this->form_validation->set_rules('status', 'Statut', 'required|in_list[' . $list . ']');
    }

    public function article($id = NULL)
    {
        if (!is_numeric($id)) {
            redirect('blog/index');
        }
        $this->load->helper('date');
        $this->load->model('item_detail');
        $this->load->model('article_status');
        $this->item_detail->load($id, $this->auth_user->is_connected);

        if ($this->item_detail->is_found) {
            $data['title'] = htmlentities($this->item_detail->title);
            $data['script'] = '<script src="' . base_url('../../../assets/javascript/article.js') . '"></script>';

            $this->load->view('common/header', $data);
            $this->load->view('blog/article', $data);
            $this->load->view('common/footer', $data);
        } else {
            redirect('blog/index');
        }
    }

    public function suppression($id = NULL)
    {
        if (!$this->auth_user->is_connected) {
            redirect('blog/index');
        }
        if (!is_numeric($id)) {
            redirect('blog/index');
        }
        $this->load->model('item_detail');
        $this->item_detail->load($id, TRUE);
        if (!$this->item_detail->is_found) {
            redirect('blog/index');
        }

        $this->load->helper('form');

        if ($this->input->is_ajax_request()) {
            // nous avons reçu une requête ajax
            $this->load->view('blog/delete_confirm');
        } else {
            // nous avons reçu une requête classique
            if ($this->input->post('confirm') === NULL) {
                $data['action'] = "confirm";
            } else {
                $this->item_detail->delete();
                $data['action'] = "result";
            };
            $data['title'] = "Suppression article";
            $this->load->view('common/header', $data);
            $this->load->view('blog/delete', $data);
            $this->load->view('common/footer', $data);
        }
    }

    public function publication($id = NULL)
    {
        if (!$this->auth_user->is_connected) {
            redirect('blog/index');
        }
        if (!is_numeric($id)) {
            redirect('blog/index');
        }
        $this->load->model('item_detail');
        $this->item_detail->load($id, TRUE);
        if (!$this->item_detail->is_found) {
            redirect('blog/index');
        }

        $this->load->helper('form');

        if ($this->input->is_ajax_request()) {
            // nous avons reçu une requête ajax
            $this->load->view('blog/publish_confirm');
        } else {
            // nous avons reçu une requête classique
            if ($this->input->post('confirm') === NULL) {
                $data['action'] = "confirm";
            } else {
                $this->item_detail->publish();
                $data['action'] = "result";
            };
            $data['title'] = "Publication article";
            $this->load->view('common/header', $data);
            $this->load->view('blog/publish', $data);
            $this->load->view('common/footer', $data);
        }
    }
}
