<?php

//this will create the security db for the system.

include '../constants/constants.php';

$install = mysql_query("CREATE TABLE IF NOT EXISTS security (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(220) DEFAULT NULL,
  password varchar(220) DEFAULT NULL,
  email varchar(220) DEFAULT NULL,
  PRIMARY KEY (id)
  );") or die(mysql_error());

?>

