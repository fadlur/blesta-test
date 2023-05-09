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
        
    }

    public function overview()
    {
        $this->set('nama', 'fadlur');
    }
}