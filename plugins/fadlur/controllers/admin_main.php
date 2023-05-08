<?php

namespace controllers;

class AdminMain extends \FadlurController
{
    public function index()
    {
        $this->set('content', $this->partial('admin_main_layout'));
    }
}