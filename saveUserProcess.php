<?php
if (isset($_GET['submit'])){
    $inputedName=$_GET['name'];
    $inputedEmail=$_GET['email'];
    $inputedPassword=$_GET['password'];

    //To save data,connect to the DB.
    $con=mysqli_connect("localhost","root","","may_syst");
    //Check if the connection was successful
    if (!$con){
        echo "Connection Failed";
    }
    else{
        //Proceed to save data
        //start by creating the insert query
        //hapa you just eka the copied stuff from the data base
        $insertQuery="INSERT INTO `majina2`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$inputedName','$inputedEmail','$inputedPassword')";
        //CCheck if the Insert query is correct
        if (!$insertQuery){
            echo "Error on the insert query";
        }
        else{
            //Proceed to finally write the data to your DB
            $save=mysqli_query($con,$insertQuery);
            //Check if the data was successfully saved
            if (!$save){
                echo "Saving Failed";
            }
            else{
                echo "Saved Successfully";
                echo "<br>";
                //To return us to the original page
                header('location:saveUser.php'); 

            }
        }

    }

}


?>