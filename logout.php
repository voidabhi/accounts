<?php
session_start();
if(isset($_SESSION)>0)
    session_destroy();
header('Location:login.php?err=4');
