<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="x-icon" href="tnvs-logo.png">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/show-login.css">
  <link rel="stylesheet" type="text/css" href="css/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="sweetalert2.js"></script>
  <title>Hospital</title>
</head>

<body>
  <input type="checkbox" name="" id="sidebar-toggle">

<?php          include("includes/dashboard-sidebar.php");          ?>

<div class="main-content">
    <header>
      <div class="menu-toggle">
        <label for="sidebar-toggle">
          <span class="las la-bars"></span>
        </label>
      </div>
      <div class="logout"><a href="../login.php"><i class="las la-sign-out-alt"></a></i></div>
    </header>
  <main>
    
  <div class="container">
    <h1>Announcements</h1>
    <hr id="hrz" class="hrz" >
    <div class="announcement-cont">
      no announcements
    </div>
</div> 

</body>
<script src="script.js"></script>
</html>