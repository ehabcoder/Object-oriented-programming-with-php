<?php

require('connction.php');
//inser into database
$sql = "INSERT INTO `users`
(`name`, `phone`, `city`, `date_added`)
VALUES
(:name,:phone,:city,:date)";

$query = $dbh -> prepare($sql);

$query -> bindparam(':name', $name, PDO::PARAM_STR);
$query -> bindparam(':phone', $phone, PDO::PARAM_STR);
$query -> bindparam(':city', $city, PDO::PARAM_STR);
$query -> bindparam(':date', $date, PDO::PARAM_STR);

$name = 'ايهاب رضا'; $phone = '01210528772'; $city = 'Egypt'; $date = date("Y/m/d");

$query->execute();

$lastInsertId = $dbh->lastInsertId();
if($lastInsertId>0)
  echo "YES";
else
  echo "NO";


/*$arr = array(
  array('Ehab', '01210528772', 'America', date('Y-m-d')),
  array('Mohamed', '01061726871', 'England', date('Y-m-d'))
);
foreach ($arr as $key => $value) {
  $name = $value[0];
  $phone = $value[1];
  $city = $value[2];
  $date = $value[3];
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId>0)
    echo "Yes".'<br>';
  else
    echo "No".'<br>';
}*/
