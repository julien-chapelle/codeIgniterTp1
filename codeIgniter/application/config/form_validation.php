<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'contact/contact' => array(
        array(
            'field' => 'name',
            'label' => 'Nom',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Mail',
            'rules' => 'valid_email|required'
        ),
        array(
            'field' => 'email_confirme',
            'label' => 'Confirmer Mail',
            'rules' => 'valid_email|required|matches[email]'
        ),
        array(
            'field' => 'title',
            'label' => 'Titre',
            'rules' => 'required'
        ),
        array(
            'field' => 'message',
            'label' => 'Message',
            'rules' => 'required'
        )
    ),

    'connection/connection' => array(
        array(
            'field' => 'username',
            'label' => "Nom d'utilisateur",
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Mot de passe',
            'rules' => 'required'
        )
    )
);
