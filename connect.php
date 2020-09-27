<?php
  $user_name=$_POST['user_name'];
  $user_email=$_POST['user_email'];
  $user_message=$_POST['user_message'];
  
  
  $conn=new mysqli('MariaDB','root','','kamlesh','3306');
  if ($conn->connect_error){
	  die('Connection Failed:'.$conn->connect_error);
  }
  else{
	  $stmt=$conn->prepare("insert into login(user_name,user_email,user_message) values(?,?,?)");
	  $stmt->bind_param("sss",$user_name,$user_email,$user_message);
	  $stmt->execute();
	  echo "Send Successfully...";
	  $stmt->close();
	  $conn->close();
  }
?>