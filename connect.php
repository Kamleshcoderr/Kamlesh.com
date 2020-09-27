<?php
  $user_name=$_post['user_name'];
  $user_email=$_post['user_email'];
  $user_message=$_post['user_message'];
  
  
  $con=new mysqli('localhost','root','','test');
  if ($con->connect_error){
	  die('Connection Failed:'.$conn->connect_error);
  }
  else{
	  $stmt=$conn->prepare("insert into login(user_name,user_email,user_message) values(?,?,?)");
	  $stmt->bind_parm("sss",$user_name,$user_email,$user_message);
	  $stmt->execute();
	  echo "Send Successfully...";
	  $stmt->close();
	  $conn->close();
  }
?>