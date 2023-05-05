<?php

class ClientMain extends TestingController {
    public function index()
    {
        // set some variable, ex: title
        $title = "Testing Plugin";
        $description = "Description";

        $this->set(compact('title', 'description'));


    }
}