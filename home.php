<?php
    echo "Home";
	include ('settings.php');
	$stmt=$pdo->query('SELECT*FROM user_accounts');
    $rows=$stmt->fetchAll();
    print_r($rows);
?>

<a href="logout.php">Logout</a>