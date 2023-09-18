<?php
    session_start();
    session_destroy();
    header("location:index.php");//Flytter useren tilbage til index siden
    exit;
?>