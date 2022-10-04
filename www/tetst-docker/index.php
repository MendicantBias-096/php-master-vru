<?php

$connect = new mysqli(
    'db',
    'root',
    'test',
    'dbname'
);

$query = 'SELECT * FROM blog';
$result = mysqli_query($connect, $query);

echo '<h1>MySQL Content:</h1>';

while ($record = mysqli_fetch_assoc($result)) {
    echo '<h2>' . $record['title'] . '</h2>';
    echo '<p>' . $record['content'] . '</p>';
    echo 'Posted ' . $record['date'] . '</>';
    echo '<hr>';
}

// $con = new mysqli($host, $user, $password, $db);

if ($connect->connect_error) {
    echo 'Fuck ' .  $connect->connect_error;
} else {
    echo 'Todo fine';
}
