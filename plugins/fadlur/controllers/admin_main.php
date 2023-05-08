<?php

namespace controllers;

class AdminMain extends \FadlurController
{
    public function index()
    {
        return $this->renderAjaxWidgetIfAsync(false);
    }
}