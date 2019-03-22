<?php

function writeUsers($user_name){
    $connection = new mysqli("localhost", "user1", "12345", "test_users");
    if ($connection->connect_error) {
        die("Ошибка: не удается подключиться: " . $connection->connect_error);
    } 
    
    $sql = "SELECT * FROM user_table WHERE user_login = ?";
    
    // 1
    $result = $connection->prepare($sql); 
    $result->bind_param("s", $user_name);
    $result->execute();
    $col1 =null; $col2=null;
    $result->bind_result($col1,$col2);
    
    while ($result->fetch()) {
        echo "{$col1} : {$col2} <br>";
    }
    $result->close();
    
    // 2
    
    $sql2 = "SELECT * FROM user_table WHERE user_login = 'Юзер второй'";
    $result2 = $connection->query($sql2);
    while ($row = mysqli_fetch_array($result2)){
        echo "{$row['user_login']} : {$row['user_password']} <br>";
    }

}

function writeHello($name){
    echo "{$name} are WELCOME ! <br>";
}































