<?php
include("db.php");

// breif example for the add item product sandbox test

if(isset($_POST['submit'])) 
{
   $itm = mysqli_real_escape_string($connection,$_POST['itm']);

      $query = "INSERT into itmval VALUES('','itm')";
      $result = mysqli_query($connection,$query);
    echo "<p>added</p>"; 
    ?>

   <a href="example.html">lets head back</a>

<?
    }
?>