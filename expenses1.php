<?php
include_once "dbCon.php";

if(isset($_POST['submit']))
{
   
    $Date = $_POST['Date'];
    $Type= $_POST['Type'];
    $Description = $_POST['Description'];
    $Amount = $_POST['Amount'];
    $Category= $_POST['Category'];
   

     $insert = mysqli_query($conn,"INSERT INTO expenses
     (Date,id_type,Description,Amount,id_catagory) 
     VALUES ('$Date','$Type',$Description,'$Amount','$category')");

     if(!$insert)
     {
         echo mysqli_error($conn);
     }
     else
     {
         echo "Records added successfully.";
     }
 
}
    
?>