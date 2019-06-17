<?php
//Connect to the DB
$conn=mysqli_connect("localhost","root","","may_syst");

//Check if the  connection was succesfull
if (!$conn){
    echo "Connection Failed";
}
else{
    //Proceed by deleting
    //Start by checking if the delete has been clicked
    if (isset($_GET['id_yangu'])){
        $received_id=$_GET['id_yangu'];
        //create the delete query
        $deleteQuery="DELETE FROM majina2 WHERE id=$received_id";
        //Complete by finally deleting
        $delete=mysqli_query($conn,$deleteQuery);
        //check if deleting was successfull
        if (!$delete){
            echo "Deleting failed";
        }
        else{
            echo "Record deleted successfully";
        }
        header('location:viewUsers.php');
    }
}

?>