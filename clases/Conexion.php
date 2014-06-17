<?php

class Conexion
{
    
    public function conectar()
    {
        $con = mysql_connect("localhost","root","");
       mysql_query("SET NAMES 'utf8'");
        mysql_select_db("dbevento",$con);
        return $con;
     }

}



?>