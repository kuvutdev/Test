<?php

require_once __DIR__ . "/config.php";

$sql = "
SELECT *
FROM user_test
";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
    $query = $conn->query($sql);

    foreach ($query->fetchAll() as $user_row) {
        echo "{$user_row['name']}: {$user_row['email']}<br>";
    }

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
