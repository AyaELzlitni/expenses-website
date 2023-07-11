<?php
include 'dbcon1.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-U-compatible" content="IE=edge">
   <meta name="viewport"content="width=device-width ,initial-scale=1.0">
   <link rel='stylesheet' href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <title>Expense Tracker</title>
 </head>  
<body>
    <div class="containar">
        <button class="btn btn-primary my-5"><a href="expenses.php" class="text-light">Add Expenses</a></button>
        <table class="table">
       <thead>
           <tr>
                <th scope="col">#S.N</th>
              <th scope="col">category</th>
              <th scope="col">Description</th>
             <th scope="col">Type</th>
               <th scope="col">Amount</th>
                <th scope="col">Date</th>
                <th scope="col">Operation</th>
          </tr>
      </thead>
      <tbody>
     <?php
     $sql="SELECT * FROM expenses";
     $result=mysqli_query($con,$sql);
     if ($result)
     {
     while($row=mysqli_fetch_assoc($result))
     {
      $id_exp=$row['id_exp'];
     $Category=$row['Category'];
     $Description=$row['Description'];
     $Type=$row['Type'];
     $Amount=$row['Amount'];
     $Date=$row['Date'];
     echo'<tr>
     <th scope="row">'.$id_exp.'</th>
        <td>'.$Category.'</td>
      <td>'.$Description.'</td>
     <td>'.$Type.'</td>
      <td>'.$Amount.'</td>
     <td>'.$Date.'</td>
      <td >
      <button class="btn btn-primary" ><a href="update.php?updateid='.$id_exp.'" class="text-light">Update</a></button>
     <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id_exp.'"class="text-light">Delete</a></button>
     </td>
     </tr>';
     }
    }
         
     ?>

          </tbody>
         </table>
      </div>
</body>