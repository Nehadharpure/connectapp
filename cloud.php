
<html>
<head>

</head>



<body>
<?php
$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
</body>
</html>
