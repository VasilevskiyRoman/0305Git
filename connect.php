<?php

$dsn = 'mysql:host=localhost;dbname=employees';

$user = 'root';

try {
    $dbh = new PDO($dsn, $user);
} catch (PDOException $error) {
    error_log("DB connection failed." . $error->getMessage());
    die("Подальша робота програми неможлива");
}

$sql = "INSERT INTO employees (first_name, last_name, gender, hire_date) VALUES (:first, :last, :gender, :hire);";

$sth = $dbh->prepare($sql);

$sth->execute(array(
    ':first' => $_GET['fname'],
    ':last' => $_GET['lname'],
    ':gender' => $_GET['gender'],
    ':hire' => $_GET['hiredate']
));

header("Location: index.php");