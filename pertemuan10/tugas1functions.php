<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function mengquery($mengquery)
{
    global $conn;
    $result = mysqli_query($conn, $mengquery);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
