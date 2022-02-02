<?php

require_once __DIR__ . "/config.php";

$sql = "
INSERT INTO user_test (
    name,
    email
)
VALUES
(
    'user 1',
    'user1@email.com'
),
(
    'user 2',
    'user2@email.com'
),
(
    'user 3',
    'user3@email.com'
)
";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Users added successfully<br>";

    echo "<a href='/index.php'>Test site</a>";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
