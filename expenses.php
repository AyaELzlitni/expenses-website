<?php
include_once "dbcon1.php";

if(isset($_POST['submit']))
{
   
    $Category= $_POST['Category'];
    $Description = $_POST['Description'];
    $Type= $_POST['Type'];
    $Amount = $_POST['Amount'];
    $Date= $_POST['Date'];
    
    
    $sql = "INSERT INTO expenses (Category,Description,Type,Amount,Date) 
    VALUES ('$Category','$Description','$Type','$Amount','$Date')";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data inserted sussfully";
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-U-compatible" content="IE=edge">
   <meta name="viewport"content="width=device-width ,initial-scale=1.0">
   <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel='stylesheet'>
    <title>Expense Tracker</title>
 </head>  
<body>
  <div class="container my-5">
       <form  method="post" >
     <div class="form-group">
         <label >Category:</label>
         <input type="text" class="form-cantrol" placeholder="Enter your category" name="Category" autocomplete="off">
     </div>   
      <div class="form-group">
         <label >Description:</label>
         <input type="text" class="form-cantrol"placeholder="Enter your Description" name="Description" autocomplete="off">
       </div>
       <div class="form-group">
         <label >Type:</label>
         <input type="text" class="form-cantrol" placeholder="Enter your Type" name="Type"autocomplete="off">
      </div>
      <div class="form-group">
         <label >Amount:</label>
         <input type="number" class="form-cantrol"placeholder="Enter your Amount" name="Amount" autocomplete="off">
     </div> 
     <div class="form-group">   
         <label >Date:</label>
          <input type="date" class="form-cantrol" name="Date">
      </div>
      <button type="submit" class="btn btn-primary" name="submit"> ADD </button>
     </from>
  </div>

      
     
</body>
</html>