<?php

  require 'connection.php';

  $users="SELECT id, title, image, URL FROM Matches";
  $result=mysqli_query($con,$users);


  if(mysqli_num_rows($result)>0){


    while($row=$result->fetch_assoc()){

      $response['matches'][]=$row;
      $response['error']="200";
    }
  }
  else{

    $response['error']="400";
    $response['matches'][]="";


  }

  
  echo json_encode($response);
    
?>