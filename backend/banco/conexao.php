<!DOCTYPE html>
<?php

    $servidor="localhost";
    $username="root";
    $password="root";
    $banco="calcempresa";

    $conecta_servidor=  mysql_connect($servidor, $username, $password);
    $conecta_banco= mysql_select_db($banco);
    
    