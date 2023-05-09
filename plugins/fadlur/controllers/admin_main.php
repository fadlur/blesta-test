<?php

namespace controllers;

class AdminMain extends \AppController
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
        $this->structure->set('page_title', "Client plugin");

//        return $this->renderAjaxWidgetIfAsync(false);
    }
}