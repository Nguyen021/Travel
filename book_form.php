<?php 

    $connection ="";
    $connection = mysqli_connect("localhost:3307","root","","travel");

    if ($connection) {
        if(isset($_POST["send"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $location = $_POST["location"];
            $guests = $_POST["guests"];
            $arrivals = $_POST["arrivals"];
            $leaving = $_POST["leaving"];

            $query = "insert into book_form(name, email,phone,address,location,guests,arrivals,leaving) values
            ('$name' , '$email' ,'$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

            try {  
                 mysqli_query($connection, $query);
                header("location:book.php");
             } catch (mysqli_sql_exception $e) {
                echo "". $e->getMessage() ."";
             }
             mysqli_close($connection);
        }
        else {
            echo "something went wrong try again!";
        }
    }
    else {
        echo"Error when connection database, Go back later!";
    }


?>