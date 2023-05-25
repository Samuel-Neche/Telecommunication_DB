<?php
    $costumer_contact = $_POST['costumer_contact'];
    $callduration = $_POST['call_duration'];
    $callrate = $_POST['call_rate'];
    $calldate = $_POST['call_date'];
    $totalp = $_POST['total_price'];
    $totalp = ($callduration*$callrate);
    $dateTime = new DateTime($calldate);
    $formattedDate = $dateTime->format('Y-m-d');
    
    //Database Conn
    $conn = new mysqli('localhost', 'root', '', 'tele_communication');
    if($conn->connect_error){
        die('Failed to connect : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from calls where costumer_contact = ?");
        $stmt->bind_param("i", $costumer_contact);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        $stmt_result->num_rows>0;
        if ((isset($data['costumer_contact']))<0) {
            echo "<h2>Please register first.</h2>";
        }else{
        $stmt = $conn->prepare("insert into calls(costumer_contact, call_date, call_duration, call_rate,  total_price)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("isiii", $costumer_contact, $formattedDate, $callduration, $callrate, $totalp);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        echo "<h1>Insertion successful</h1>";
        echo '<button type="button" style="background-color: #E76F51; border-radius: 10px; text-decoration: none; color: white; padding: 10px; border: none;"><a href="../indexa.html">Proceed</a></button><br><br>';
        echo '<button type="button" style="background-color: #E76F51; border-radius: 10px; text-decoration: none; color: white; padding: 10px; border: none;"><a href="../callrec.html">Submit more</a></button>';
        $stmt->close();
        $conn->close();
        }
    }
?>