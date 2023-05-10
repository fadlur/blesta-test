<?php

//namespace controllers;

class AdminMain extends \FadlurController
{
    public function preAction()
    {
        parent::preAction();

        $this->requireLogin();

        $this->structure->set('page_title', 'public value');
    }

    public function index()
    {
        $this->uses(["Clients"]);// call model client


        $list_client = $this->Clients->getList();
        $this->set('list_client', $list_client);
        $this->structure->set('page_title', "Client fadlur plugin");
    }
}