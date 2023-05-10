<?php

class AdminManagePlugin extends AppController
{
    public function init()
    {
        $this->parent->requireLogin();

        $this->view->setView(null, 'Fadlur.default');
    }

    public function index()
    {
        $this->init();

        return $this->partial('admin_manage_plugin');
    }

    public function test()
    {

    }
}