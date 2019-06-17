<?php
if (isset($_POST['btn_Update'])){
    $received_id=$_POST['x'];
    $received_name=$_POST['y'];
    $received_email=$_POST['z'];
    $received_password=$_POST['pwd'];
    //connect to the DB
    $conn=mysqli_connect("localhost","root","","may_syst");
    //Check if the connection is succesfull
    if (!$conn){
        echo "Connection Failed";
    }
    else{
        //Proceed to update the database
        $updateQuery="UPDATE majina2 SET jina='$received_name',arafa='$received_email',siri='$received_password' WHERE id='$received_id'";
        //check if the Query is correct
        if (!$updateQuery){
            echo "Error on the update query";
        }
        else{
            //Proceed to finally update
            $update=mysqli_query($conn,$updateQuery);
            //Check if the update was succesful
            if (!$update){
                echo "Updating Failed";
            }
            else{
                echo "Record Updated Successfully";
                header("location:viewUsers.php");
            }
        }
    }
}

?>