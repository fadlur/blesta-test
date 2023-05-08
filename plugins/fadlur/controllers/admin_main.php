<?php

namespace controllers;

class AdminMain extends \FadlurController
{
    public function index()
    {
        $this->uses(["Clients"]);
        $list_client = $this->Clients->getList();
        $this->set(compact('list_client'));


    }
}