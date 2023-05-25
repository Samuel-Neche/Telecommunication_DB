<?php
$phoneno = $_POST['phone_number'];
$password = $_POST['password'];

// Create a connection
$con = new mysqli("localhost", "root", "", "tele_communication");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}else{
    $stmt = $con->prepare("select * from customers where phone_number = ?");
    $stmt->bind_param("i", $phoneno);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo '<h2> Login Successful</h2>';
            echo '<button type="button" style="
             background-color: #E76F51; 
             border-radius: 10px; 
             text-decoration: none; 
             color: white;
             padding: 10px 20px;
             border: none; 
             
             "><a href="../indexa.html">Proceed to next page</a></button>';
        }else{
            echo "<h2>Invalid Contact or password</h2>";
            echo '<a style="
            background-color: #E76F51; 
            border-radius: 10px; 
            text-decoration: none; 
            color: white;
            padding: 10px 20px;
            border: none;
            href="../signin.php">Try again</a>';
        }
        }else{
            echo "<h2>Invalid Contact or password</h2>";
            
        }
}
?>