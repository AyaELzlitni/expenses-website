<?php

  include("coof.php");
  if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    $username = $_POST['username'];
    $Password = $_POST['Password'];
    
    if(!empty($username) && !empty($password) && lis_numeric($username))
    {
      $query = "SELECT * FROM form users where username='$username' linit 1";

      $result = mysqli_query($conn , $query);
    

    if ($result) {

      if( $result && mysqli_num_rows($result)> 0){
        
        $users_data = mysqli_fatch_assoc($result);
            
        if($users_data['password'] == $password)
        {
         header("locaction : homepage.php");
    
        }
      }
    } 
    echo "<script type['text/javascript'>alert('worng username or password')</script>";
  }
   else {
    echo "<script type['text/javascript'>alert('worng username or password')</script>";
   }
   }
  
?>