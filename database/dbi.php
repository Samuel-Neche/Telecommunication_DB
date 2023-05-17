<?php
    $username = $_POST['customer_name'];
    $phoneno = $_POST['phone_number'];
    $email = $_POST['email'];
    $date = $_POST['dateofbirth'];
    $password = $_POST['password'];
    $dateTime = new DateTime($date);
    $formattedDate = $dateTime->format('Y-m-d');
    
    //Database Conn
    $conn = new mysqli('localhost', 'root', '', 'tele_communication');
    if($conn->connect_error){
        die('Failed to connect : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into customers(customer_name, phone_number, email, dateofbirth, password)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $username, $phoneno, $email, $formattedDate, $password);
        $stmt->execute();
        echo "registration seccessful";
        echo '<button type="button" style="
             background-color: #E76F51; 
             border-radius: 10px; 
             text-decoration: none; 
             color: white;
             padding: 10px 20px;
             border: none; 
             
             "><a href="../signin.html">Proceed to next page</a></button>';
        $stmt->close();
        $conn->close();
    }
?>