<?php

class FadlurPlugin extends \Plugin
{

    public function getActions()
    {
        return [
            [
                'action' => 'nav_staff',
                'uri' => 'plugin/fadlur/staff_main/index',
                'name' => 'Fadlur',
                'options' => null,
                'enabled' => 1
            ]
        ];
    }

    public function install($plugin_id)
    {
        if (!isset($this->Record)) {
            Loader::loadComponents($this, ['Input', 'Record']);
        }

        try {
            $this->Record->
            setField("id", array('type' => "int", 'size' => 10, 'unsigned' => true, 'auto_increment' => true))->
            setField("name", array('type' => "varchar", 'size' => 255))->
            setField("email", array('type' => "varchar", 'size' => 255))->
            setField("phone", array('type' => "varchar", 'size' => 255))->
            setKey(array("id"), "primary")->
            create("testing_user");
        } catch (Exception $e) {
            $this->Input->setErrors(['db' => ['create' => $e->getMessage()]]);
            return;
        }
    }

    public function uninstall($plugin_id, $last_instance)
    {
        if (!isset($this->Record)) {
            Loader::loadComponents($this, ['Record']);
        }

        // Remove all system_overview tables *IFF* no other company in the system is using this plugin
        if ($last_instance) {
            $this->Record->drop('testing_user');
        }
    }
}