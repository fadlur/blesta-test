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
        $this->view->set('list_client', $list_client);
        $this->render("admin_main_view");
//        $this->set('test_var', 'test var');
//        $this->view->set('test_var', 'variable');
//        $this->structure->set('test_var', 'variable');


//        return $this->renderAjaxWidgetIfAsync(false);
    }
}