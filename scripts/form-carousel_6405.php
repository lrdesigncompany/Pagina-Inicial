<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Orçamento',
    'email_message' => 'Olá, gostaria de fazer um orçamento',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'Contatolrcompany@gmail.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'name' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Nome',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nome\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Whatsapp para Contato',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Whatsapp para Contato\' is required.'
    )
    ),
    'message' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Menssagem',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Menssagem\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>