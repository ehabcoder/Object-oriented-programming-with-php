<?php

//CONNECTION
  require('connection.php');

  //DELETE from DATABASE:.
  $sql = "DELETE FROM `users` WHERE `name`=:name";

  $query = $dbh->prepare($sql);
  $query->bindparam(':name', $name, PDO::PARAM_STR);
  $name = "ايهاب رضا";

  $query -> execute();


  ///delete ALL datbase
// $sql = "DELETE FROM `users`";
// $query = $dbh->prepare($sql);
// $query->execute();
