<?php
/**
 * Created by PhpStorm.
 * User: SERAC-Bangladesh
 * Date: 11/30/2015
 * Time: 2:33 PM
 */

//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
      //Email information
      session_start();
      $companyName =$_SESSION['companyName'];
      $admin_email = $_SESSION['companyEmail'];
      $email = $_POST['email'];
      $subject = "New Mail from your website: $companyName";
      $message = $_POST['message'];
      //send email
      //Email response
      if( mail($admin_email, "$subject", $message, "From:" . $email)){
          echo("<script>alert(\"Thank you for contacting us!\");</script>");
          echo("<script>location.href='index.php'</script>");
      }else {
          echo("<script>alert(\"Somethin went wrong!\");</script>");
          echo("<script>location.href='index.php'</script>");
      }

  }

  //if "email" variable is not filled out, display the form
  else
  {
      echo("<script>alert(\"Please input required fields\");</script>");
      echo("<script>location.href='contact.php'</script>");
  }
?>