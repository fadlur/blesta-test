<?php

class FadlurController extends AppController
{
    public function preAction()
    {
        $this->structure->setDefaultView(APPDIR);
        parent::preAction();

        $this->view->view = "default";
    }

    public function index()
    {

    }
}