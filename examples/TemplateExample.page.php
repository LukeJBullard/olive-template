<?php
    /**
     * Olive-Template
     * Example Page
     * October 2020
     * 
     * @author Luke Bullard
     */

    //make sure we are included securely
    if (!defined("INPROCESS")) { header("HTTP/1.0 403 Forbidden"); exit(0); }

    $modules = Modules::getInstance();

    //load the template module
    $modules['template'];

    //load the template at templates/TemplateExample.tpl
    $template = new Template(dirname(__FILE__) . "/templates/TemplateExample.tpl");

    //assign some variables to the template
    $template->assign("pageTitle", "Example Page Title");
    $template->assign("animals", array(
        array("name" => "dog"),
        array("name" => "cat"),
        array("name" => "rat")
    ));
    $template->assign("skyIsBlue", true);

    //render the template to a string
    $renderToString = true;
    $renderedTemplate = $template->display($renderToString);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            html,body {font-family: sans-serif;}
        </style>
    </head>
    <body>
        <center>
            <?php echo $renderedTemplate; ?>
        </center>
    </body>
</html>
