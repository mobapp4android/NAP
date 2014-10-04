<?php 

$db_host="localhost";
$db_username="root";
$db_pass="nord";
$db_name="nord_mobile";

@mysql_connect("$db_host","$db_username","$db_pass") or die ("Nu s-a putut conecta la MySql");
@mysql_select_db("$db_name") or die ("Nu exista baza de date");

echo"Conexiune realizata ";
?>