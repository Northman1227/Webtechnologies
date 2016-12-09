<?php
   if (isset($_POST['email'])){
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      if (filter_var($email, FILTER_VALIDATE_EMAIL))
      }
   
   if (isset($_POST['name'])){
      $email = filter_var($_POST['name'], FILTER_SANITIZE_NAME);
      if (filter_var($name, FILTER_VALIDATE_NAME))
      }
  $connect=mysqli_connect("localhost","tnorris","Northman1","a3659649_Dbase");
  myspli_query($connect,"INSERT INTO databasefordev3 (name,email)
  VALUES ('$_POST[post_name]', '$_POST[post_email]')";

     if (isset($_REQUEST['email']))  {
        $admin_email = "tnorris1227@gmail.com";
        $email = $_REQUEST['name'];
        $email = $_REQUEST['email'];
    
        mail($admin_email, "$name", "From:" . $email);
        echo "thank you for contacting me!";
  
  //Email response
  echo "Thank you for contacting us!";
  }
?>
