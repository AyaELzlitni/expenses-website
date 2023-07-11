<?php
$con=new mysqli("localhost","root","","expenses website");
if(!$con)
{
    die(mysqli_error($con));
}
?>