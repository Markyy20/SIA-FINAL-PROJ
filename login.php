<?php
$Email = $password = "";
$EmailErr = $passwordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["Email"])) {
         $EmailErr = "Email is Required";
       } else {
        $Email = $_POST["Email"];
       }

       if (empty($_POST["password"])) {
        $passwordErr = "Password is Required";
     } else {
        $password = $_POST["password"];
    }

    if ($Email && $password) {
        include("admin/connection.php");

        $check_email = mysqli_query($connections, "SELECT * FROM data WHERE email = '$Email'");
        $check_email_row = mysqli_num_rows($check_email);
 
        if ($check_email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_email)) {
                $db_password = $row["password"]; 
                $db_account_type = $row["Account_type"];

                if ($db_password === $password) { 
                    if ($db_account_type == "1") {
                      echo "<script>alert('Welcome to admin')</script>";
                        echo "<script>window.location.href = 'admin/dashboard.php'</script>";
                        
                      
                    } else {
                        echo "<script>window.location.href = 'user/dashboard.php'</script>";
                    }
                } else {
                 
                    $passwordErr = "Password is incorrect";
                }
            }
        } else {
          
            $EmailErr = "Email is not registered!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="design/login.css">
    <title>Login Form</title>
    
  </head>
  <body>

    <div class="form-container"> 
    
      <h1>Login</h1>
      <form method="post">
    
        <div class="input-field"> 
        <span style = "color: red;"><?php echo $EmailErr;?></span>
          <input type="email" placeholder="Email" name="Email">
          <span></span>

        </div>
        <div class="input-field"> 
          <span style = "color: red;"><?php echo $passwordErr;?></span>
          <input type="password" placeholder="Password" name="password">
          <span></span>

        </div>
      
        <input type="submit" value="Login">
        <div class="create-acc"> 
          Don't have an account? <a href="#">Register</a>
        </div>
      </form>
    </div>






  </body>
</html>
