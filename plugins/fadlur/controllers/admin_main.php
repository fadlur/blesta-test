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
        $this->uses(["Clients"]);// call model client


        $list_client = [];
        $this->set('list_client', $list_client);


        return $this->renderAjaxWidgetIfAsync(false);
    }
}