<?php
$email= filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'PASSWORD');

if(!empty($email)){
    if (!empty($passsword))
    {
    echo "Password should not be empty.";
    }else {
        $password = $_POST["password"];
    
    {
        $servername = "localhost";
        $username = "root";
        $password_db = "";
        $dbname = "register";

        $conn=new mysqli($servername, $username, $password_db, $dbname);

        if(mysqli_connect_error()){
            die('connect Error('.
            mysqli_connect_errno().')' .
            mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO form(email,password) values ('$email', '$password')";
            if($conn->query($sql)){
                echo "New record is inserted succefully";
            }
            else{
                echo "Error:". $sql."<br>" . $conn->error;
            }
            $conn->close();
        }

    }
}
}
?>

