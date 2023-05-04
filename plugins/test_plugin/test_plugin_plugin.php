<?php

namespace test_plugin;

class TestPluginPlugin extends \Plugin
{

    public function __construct() {
        $this->loadConfig(dirname(__FILE__) . DS . "config.json");
    }

    public function install($plugin_id)
    {
        // create table test_plugin
        // 4 column (first_name, last_name, email, phone)
    }

    public function uninstall($plugin_id, $last_instance)
    {
        #
        # TODO: Place uninstallation logic here
        #
        // drop table test_plugin
    }
}