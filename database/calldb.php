<?php
    $callduration = $_POST['call_duration'];
    $calldate = $_POST['call_date'];
    $dateTime = new DateTime($calldate);
    $formattedDate = $dateTime->format('Y-m-d');
    
    //Database Conn
    $conn = new mysqli('localhost', 'root', '', 'tele_communication');
    if($conn->connect_error){
        die('Failed to connect : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into calls(call_duration, call_date)
        values(?, ?)");
        $stmt->bind_param("is", $callduration, $formattedDate);
        $stmt->execute();
        echo "<h1>Insertion successful</h1>";
        echo '<button type="button" style="background-color: #E76F51; border-radius: 10px; text-decoration: none; color: white; padding: 10px; border: none;"><a href="../indexa.html">Proceed<br></a></button>';
        echo '<button type="button" style="background-color: #E76F51; border-radius: 10px; text-decoration: none; color: white; padding: 10px; border: none;"><a href="../callrec.html">Submit more<br></a></button>';
        $stmt->close();
        $conn->close();
    }
?>