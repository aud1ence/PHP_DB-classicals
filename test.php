<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test", 'root', '1234');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    $sql_stmt = "SELECT * FROM `users`";
    $result = $pdo->query($sql_stmt);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $data = [];
    foreach ($result as $row) {
        $data[] = $row;
    }
    echo "<pre>";
    var_dump($data);
} catch (PDOException $e) {
    echo $e->getMessage();
}