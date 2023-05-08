<?php

namespace controllers;

class AdminMain extends \FadlurController
{
    public function preAction()
    {
        parent::preAction();

        $this->requireLogin();
    }

    public function index()
    {
        $this->uses(["Clients"]);
        $list_client = [];
        $this->set('list_client', $list_client);
        $this->view->set('test_var', 'variable');
        return $this->renderAjaxWidgetIfAsync(false);
    }
}