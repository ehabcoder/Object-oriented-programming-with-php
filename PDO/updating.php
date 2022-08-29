<?php

  require('connection.php');

  ///Update databases
  $sql = "UPDATE `users`
          SET `city` = :city, `phone` = :phone
          WHERE `id` = :id ";

  $query = $dbh->prepare($sql);
  $query -> bindparam(':city', $city, PDO::PARAM_STR);
  $query -> bindParam(':phone', $phone, PDO::PARAM_STR);
  $query -> bindparam(':id', $id, PDO::PARAM_INT);

  $city = 'America';
  $phone = '01210546545';
  $id=188;

  $query->execute();

  if($query->rowCount()>0) {
    echo $count = $query -> rowcount(). ' rows are affected.';

  }
  else {
    echo "NO";
  }
