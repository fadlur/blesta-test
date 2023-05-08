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
        $this->structure->set("page_title", "List client plugin");
        return $this->renderAjaxWidgetIfAsync(false);
    }
}