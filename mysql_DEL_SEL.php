
<?php
    $servername = "localhost";
    $username = "_____";
    $password = "*****";
    $dbname = "dbhotel";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        return;
    }
    $sql = "
    SELECT * FROM pagamenti
    ";
    $sql = "
    DELETE FROM pagamenti
    WHERE id = 8
    ";
    $sql2 = "
    DELETE FROM pagamenti
    WHERE pagante_id = 6 AND status LIKE 'rejected'
    ";
    $sql3 = "
    SELECT id, status, price
    FROM pagamenti
    WHERE price > 600
    ";
    
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        // VERSIONE 1
        // $row = $result->fetch_assoc();
        // while($row) {
        //
        //     echo "ospite: " . $row['name'] . " " . $row['lastname'] . '<br>';
        //     $row = $result->fetch_assoc();
        // }
        // VERSIONE 2
        while($row = $result->fetch_assoc()) {
          //query0
           echo $row['id'].": ".$row['status']." | ".$row['price'].'<br>';
           //query2
           //echo "OK";
           // query3
           //echo $row['id'].": ".$row['status']." | ".$row['price'].'<br>';
           $row = $result->fetch_assoc();
        }
    } elseif ($result) {
        echo "0 results";
    } else {
        echo "query error";
    }
    $conn->close();

