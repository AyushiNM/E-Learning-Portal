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

        <html>
<head>
	<title>Simple Search Engine</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php if (isset($_GET['form_submitted'])): ?>

        <h2>Search Results For <?php echo $_GET['search_term']; ?> </h2>
        <?php if ($_GET['search_term'] == "GET"): ?>

            <p>The GET method displays its values in the URL</p>

            <?php else: ?>
            	 <p>Sorry, no matches found for your search term</p>

            <?php endif; ?>

                <p>Go <a href="/search_engine.php">back</a> to the form</p>

                <?php else: ?>

                   <h2>Simple Search Engine - Type in GET </h2>

                   <form action="search_engine.php" method="GET">

                        Search Term:
                        <input type="text" name="search_term">
                        <br>
                            
			<input type="hidden" name="form_submitted" value="1" />

                       <input type="submit" value="Submit">
                       
                  </form>
               <?php endif; ?>
</body>
</html>
