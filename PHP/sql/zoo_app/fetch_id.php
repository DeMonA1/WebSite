<?php
	require_once 'login.php';

	try
	{
		$pdo = new PDO($attr, $user, $pass, $opts);
	}
	catch (PDOException $e)
	{
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}

	$query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
	$result = $pdo->query($query);
	$insertID = $pdo->lastInsertId();
	
	echo "The insert ID was: " . $pdo->lastInsertId();
