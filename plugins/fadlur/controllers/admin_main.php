<?php

namespace controllers;

class AdminMain extends \FadlurController
{
    public function index()
    {
        $this->uses(["Clients"]);
        $list_client = $this->Clients->getList();
        $this->set('list_client', $list_client);

        $this->view('admin_main');
    }
}