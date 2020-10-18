<?php
    /**
     * Templating module for OliveWeb
     * 
     * @author Luke Bullard
     * @version 1.1
     */

    //make sure we are included securely
    if (!defined("INPROCESS")) { header("HTTP/1.0 403 Forbidden"); exit(0); }

    /**
     * The Templating OliveWeb Module
     */
    class MOD_template
    {
        public function __construct()
        {
            //load template.class.php
            require_once(dirname(__FILE__) . "/template.class.php");
        }
    }
?>