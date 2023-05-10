<?php

class AdminManagePlugin extends AppController
{
    public function init()
    {
        return $this->view->setView(null, 'fadlur.default');
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