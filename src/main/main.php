<?php

namespace DevTran\Src\Main;

defined('ABSPATH') or die();

class Main
{
    protected static $_instance = null;

    /**
   * @return Main
   */


    public static function get_instance()
    {
        if (is_null(self::$_instance)) {
        self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function __construct()
    {
        /* Init Function */
        add_action('init', array($this, 'function_init'));
    } 

    public function function_init(){
        var_dump("check");
    }
}