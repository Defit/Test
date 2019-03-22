<?php

function writeUsers(){
    $connection = new mysqli("localhost", "user1", "12345", "test_users");
    if ($connection->connect_error) {
        die("Ошибка: не удается подключиться: " . $connection->connect_error);
    } 
    $result = $connection->query("SELECT * FROM user_table");    
    while ($row = mysqli_fetch_array($result)) {
        echo "{$row['user_login']}: {$row['user_password']} <br>";
    }
    $result->close();
}










