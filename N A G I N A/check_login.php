
<?php

//check_login.php
    $servername = "premium87.web-hosting.com";
    $dBUserName = "mmachbon_class_helper";
    $dBPassword = "Z%jJt}6IqSPO";
    $dBName = "mmachbon_do_class_help";

if(isset($_POST["email"]))
{
   $connect = new PDO("mysql:host=$servername;dbname=$dBName", "$dBUserName", "$dBPassword");

 session_start();

 $query = "SELECT * FROM tbl_login WHERE username = '".$_POST['email']."'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $total_row = $statement->rowCount();

 $output = 'Session Create Successfully';

 if($total_row > 0)
 {
  $result = $statement->fetchAll();

  foreach($result as $row)
  {
   if(password_verify($_POST["password"], $row["password"]))
   {
    $_SESSION["name"] = $row["firstname"];
   }
   else
   {
    $output = '<label>Wrong Password</label>';
   }
  }
 }
 else
 {
  $output = '<label>Wrong Email Address</label>';
 }

 echo $output;
}

?>