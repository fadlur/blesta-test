<?php

class FadlurController extends AppController
{
    public function preAction()
    {
        $this->structure->setDefaultView(APPDIR);
        parent::preAction();

        $this->view->view = "default";
        $this->structure->view = 'default';
    }

    public function index()
    {

    }
}