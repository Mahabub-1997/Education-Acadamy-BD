<?php

$username = $_POST['username'];

$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];

if (!empty($username) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";

    $conn = new mysqli($host, $dbUsername,  $dbPassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email From reg Where email = ? Limit 1";
        $INSERT = "INSERT Into reg (username, gender, email, phoneCode, phone) values(?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssii", $username, $gender, $email, $phoneCode, $phone);
            $stmt->execute();
            echo "New record inserted successfully";
            header("location: index.php");
        }    else {
            echo "Someone already register using this email";
        }
        $stmt->close();
        $conn->close();


    }

} else{
    echo "All field should be required";
    die();
}



?>