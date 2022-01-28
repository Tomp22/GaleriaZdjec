<?php

if(isset($_SESSION['udanarejestracja']))
{
    redirectRoute('index');
    exit();
}
else{
    unset($_SESSION['udanarejestracja']);
}