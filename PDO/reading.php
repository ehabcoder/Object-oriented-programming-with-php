<?php
  require('reading.php');

  ///read from database
  $sql = "SELECT * FROM `users`";

  $query = $dbh->prepare($sql);

  $query->bindparam(':city', $city, PDO::PARAM_STR);

  $city = 'Egypt';

  $query->execute();

  $result = $query -> fetchAll(PDO::FETCH_ASSOC);

  if($query->rowCount() > 0)
  {
    foreach($result as $results) {
      echo $results['name'] . ", ";
      echo $results['city'] . ", ";
      echo $results['date_added'] ;
      echo "<br>";
    }
  }

 ?>
