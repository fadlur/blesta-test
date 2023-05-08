<?php
class AdminFadlur extends AppController {
    public function preAction()
    {
        parent::preAction();

        // require login
        $this->requireLogin();
    }
}