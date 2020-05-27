<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    )
);
