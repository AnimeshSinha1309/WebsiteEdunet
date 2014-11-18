<?php

    // configuration
    require("../includes/config.php"); 

    if($_SESSION["access"] == "Developer")
    {
        // render under development page
        render("under_development.php", ["catchnotimplementederror" => "Some subsections of this page have been built in part.
        Development of the index page has not yet started. Redirect to <a href=\"".CONTROLLER."/eventforms_cont.php?f=event_1\"> 
        Event Registeration form for NSEJS </a>"]);
    }
    else
    {
        // render under development page
        render("under_development.php", ["catchnotimplementederror" => "Work on this page is currently going on. 
        If you are a <u>Developer</u>, you may log in and view the current state of the website, and provide feedback."]);
    }
?>
