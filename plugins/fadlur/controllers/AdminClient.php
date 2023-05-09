<?php

namespace controllers;

class AdminClient extends \FadlurController
{
    public function preAction()
    {
        parent::preAction();

        $this->requireLogin();
    }

    public function index()
    {
        $this->set('nama', 'fadlur');
    }
}