<!doctype = html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

<?php
$db = new PDO('mysql:host=us-cdbr-east-02.cleardb.com;port=3306;dbname=heroku_ef5f71273fe5d40;charset=utf8','b712f8e8641bf4','466f991d');
$value = $db->query("select prefecture,spot,review from pref where prefecture = '新潟県'");
while ($post = $value->fetch()){
	print "{$post['prefecture']} {$post['spot']} {$post['review']}<hr>";

}
?>

</body>
</html>
