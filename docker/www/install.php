<?php

require_once __DIR__ . "/config.php";

// sql to create table
$sql = "CREATE TABLE user_test (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table user_test created successfully<br>";

    echo "<a href='/insert.php'>Next step</a>";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
