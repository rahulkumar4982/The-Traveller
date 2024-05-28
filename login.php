<?php
$insert = false;
if(isset($_POST['login'])){
    // Set connection variables (*)
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection (*)
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success (*)
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Now you have Successfully connected to the database

    // Collect post variables (I have added just two input tags in the html so i will create just two $_POST variables, when we create a input tage in html for eg. <input type="text" id="gender" name="gender"> so in brackets of $_POST[add name of input eg. here it is:- gender] )
    // you can add as many as variables but just make sure you are adding the name attribute value into the bracets 
    $email = $_POST['email'];  // name is name of first input tag
    $password = $_POST['password'];    // uid is name of second input tag


    // this is the query which will insert record into your database so add relevant variables and same name of table and database as you have made into the myadminphp 
    $sql = "INSERT INTO `login`.`login` (`email`, `password`) VALUES ('$email'password$password');";   //practise- database name , signup- table name you can other names to your database and table
    

    // Execute the query
    if($con->query($sql) == true){
        // Successfully inserted
        // Flag for successful insertion
        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

