<?php

   require('Model/conexion.php');


   $con = new Conexion();

   $users = $con -> getusers();


   require('Views/V_verUsuarios.php');


?>