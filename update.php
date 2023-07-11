<?php
include "dbcon1.php";
$id_expenses=$_GET['updateid'];
$sql="select * FROM expenses WHERE id_exp=$id_exp";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result)
   $Type=$row['Type'];
  $category=$row['category'];
  $Description=$row['Description'];
  $Amount=$row['Amount'];
  $Date=$row['Date'];
if(isset($_POST['submit']))
{
    $Type= $_POST['Type'];
    $category= $_POST['category'];
    $Description = $_POST['Description'];
    $Amount = $_POST['Amount'];
    $Date= $_POST['Date'];
    
    
    $sql ="UPDATE expenses set id_expenses='$id_expenses',Type='$Type',category='$category',Description='$Description',Amount='$Amount',Date='$Date'";

    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Data update sussfully";
        header('location:display.php');
    }
    else
    {
        die(mysqli_error($con));
    }

} 
?>

<?php
  include "connection.php";
 

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id_expenses'])){
     
      exit;
    }
    $id_expenses = $_GET['updateid'];
    $sql = "SELECT * from expenses where id_expenses=$id_expenses";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while($row){
        $Type=$row["Type"];
        $category=$row["category"];
        $Description=$row["Description"];
        $Amount=$row["Amount"];
        $Date=$row["Date"];
    }
  }
  elseif(isset($_POST['submit'])){
    $id_expenses = $_POST["id_expenses"];
    $Type= $_POST['Type'];
    $category= $_POST['category'];
    $Description = $_POST['Description'];
    $Amount = $_POST['Amount'];
    $Date= $_POST['Date'];

    $sql = "update expenses set Type='$Type',category,'$category',Description='$Description',Amount='$Amount',Date='$Date' where id_exp=$id_exp";
    $result = $conn->query($sql);
    
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
     <div class="form-group">
         <label >Type</label>
         <input type="text" class="form-control" placeholder="Enter your Type" name="Type"autocomplete="off"value=<?php echo $Type ;?>>
      </div>
         <label >category</label>
         <input type="text" class="form-control" placeholder="Enter your category" name="category" autocomplete="off" value=<?php echo $category ;?>>
     </div>   
      <div class="form-group">
         <label >Description</label>
         <input type="text" class="form-control"placeholder="Enter your Description" name="Description" autocomplete="off"value=<?php echo $Description ;?>>
       </div>
      <div class="form-group">
         <label >Amount</label>
         <input type="number" class="form-control"placeholder="Enter your Amount" name="Amount" autocomplete="off"value=<?php echo $Amount ;?>>
     </div> 
     <div class="form-group">   
         <label >Date</label>
          <input type="date" class="form-control" name="Date" value=<?php echo $Date;?>>
      </div>
      <button type="submit" class="btn btn-primary" name="submit"> Update </button>
     </from>
  </div>

      
     
</body>
</html>