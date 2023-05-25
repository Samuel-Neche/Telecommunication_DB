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
        $stmt = $conn->prepare("select * from customers where phone_number = ?");
        $stmt->bind_param("i", $phoneno);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        $data = $stmt_result->fetch_assoc();
        $stmt_result->num_rows>0;
        if ((isset($data['phone_number']))>0) {
            // Duplicate value exists, handle the error or display a message
            echo "<h2>Duplicate value found. Cannot insert.</h2>";
            echo '<button type="button" style="
            color: white;
            border-radius: 10px; 
            text-decoration: none;
            padding: 10px 20px;
            "><a href="../signup.php">Try again</a></button>';
        } else {
        $stmt = $conn->prepare("insert into customers(customer_name, phone_number, email, dateofbirth, password)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $username, $phoneno, $email, $formattedDate, $password);
        $stmt->execute();
        echo "registration successful";
        header("Location: ../signin.php");
        $stmt->close();
        $conn->close();
        exit();
        }
    }
?>
