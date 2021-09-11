<?php

$name=filter_input(INPUT_POST,'name');

$email=filter_input(INPUT_POST,'email');

$mobile=filter_input(INPUT_POST,'mobile');
$interest=filter_input(INPUT_POST,'interest');
$age=filter_input(INPUT_POST,'age');



        $host="localhost";

        $dbusername="root";

        $dbpassword="";

        $dbname="sb";

        $conn =new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if(mysqli_connect_error()){

            die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());

        }

        else{

            $sql="INSERT INTO enrol (name, email,mobile,interest,age) values('$name','$email','$mobile','$interest','$age')";

            if($conn->query($sql)){

               header("location:../index.html");

            }

            else{

                echo "Error: ".$sql."<br>".$conn->error;

            }

            $conn->close();
        }

        
