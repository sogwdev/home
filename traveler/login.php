<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>

</head>
<body>
<?php
$name = $_POST["name"];
$pwd = $_POST["pwd"];
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$search = $db->query("select * from membership where name='$name'");
while ($targetpwd = $search->fetch()){
if ($pwd == $targetpwd['pwd']) {
header('Location: https://startpage001.herokuapp.com/traveler/map.php');
} else {
  //print  "認証失敗";
  echo "<li>認証失敗</li>";
}
}
 ?>
</body>

</html>
