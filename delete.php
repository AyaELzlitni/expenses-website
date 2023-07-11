<?php
include 'dbcon1.php' ;
if(isset($_GET['deleteid']))
{
    $id_exp=$_GET['deleteid'];
  
    $sql="DELETE FROM expenses WHERE expenses.id_exp = $id_exp";
    
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data Delete sussfully";
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}