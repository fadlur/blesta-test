<?php

class TestingPlugin extends Plugin
{
    public function __construct()
    {
        $this->loadConfig(dirname(__FILE__) . DS . 'config.json');
    }

    public function install($plugin_id)
    {
        $this->Record->
        setField("id", array('type' => "int",'size' => 10,'unsigned' => true,'auto_increment' => true))->
        setField("name", array('type' => "varchar", 'size' => 255))->
        setField("email", array('type' => "varchar", 'size' => 255))->
        setField("phone", array('type' => "varchar", 'size' => 255))->
        setKey(array("id"), "primary")->
        create("testing_user");
    }

    public function uninstall($plugin_id, $last_instance)
    {
        $this->Record->drop('testing_user');
    }
}
