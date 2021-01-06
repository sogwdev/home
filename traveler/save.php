<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
$tdfk = htmlspecialchars($_POST["pref"],ENT_QUOTES);
$sight = htmlspecialchars($_POST["sight"],ENT_QUOTES);
$impression = htmlspecialchars($_POST["impression"],ENT_QUOTES);
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$db->query("insert into pref (prefecture,spot,review) values ('$tdfk','$sight','$impression')");
$db->query("update list set flg = 1 where prefecture = '$tdfk'");


header('Location: https://startpage001.herokuapp.com/traveler/map.php');
?>

</body>
</html>
