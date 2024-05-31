<?php
$id = $_GET["ID"];
include("connection.php");  
    ?>
<!DOCTYPE html>
<html lang="en">    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/action.css">
  <link rel="stylesheet" type="text/css" href="css/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="shortcut icon" type="x-icon" href="tnvs-logo.png">
 
  <title>Hospital</title>
</head>
<body>
  <input type="checkbox" name="" id="sidebar-toggle">
  <?php
include("includes/lm-sidebar.php");
?>
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
    <?php
    $sql = "SELECT * FROM info_table WHERE ID = $id LIMIT 1";
    $result = mysqli_query($connections, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<article>
<div id="view-container" class="edit-container">
      <h1 id="vtitle" class="form-title">Hospital Data Recoreds</h1>
      <form method="post">
      <div class="formbdy" > 
        <div class="main-user-info">
          <div class="user-input-box">
            <label id="vlbl" for="fullName">Name</label>
            <input id="vinpt" type="text"
                    id="fullName"
                    name="ename"
                    value="<?php echo $row['Ename'] ?>"readonly/>
          </div>
          <div class="user-input-box">
            <label id="vlbl" for="username">Job Title</label>
            <input id="vinpt" type="text"
                    id="username"
                    name="ejob"
                     value="<?php echo $row['Ejob'] ?>"readonly/>
          </div>
          <div class="user-input-box">
            <label id="vlbl" for="email">Department</label>
            <input id="vinpt" type="text"
                    id="email"
                    name="edept"
                     value="<?php echo $row['Edept'] ?>"readonly/>
          </div>
          <div class="user-input-box">
            <label id="vlbl" for="phoneNumber">Hire of Date</label>
            <input id="vinpt" type="date"
                    id="phoneNumber"
                    name="edate"
                     value="<?php echo $row['Edate'] ?>"readonly/>
          </div>
          <div class="user-input-box">
            <label id="vlbl" for="password">Status</label>
            <input id="vinpt" type="text"
                    id="password"
                    name="estatus"
                     value="<?php echo $row['Estatus'] ?>"readonly/>
          </div>
          <div class="user-input-box">
            <label id="vlbl" for="confirmPassword">Shift Schedule</label>
            <input id="vinpt" type="text"
                    id="confirmPassword"
                    name="eshift"
                    value="<?php echo $row['Eshift'] ?>"readonly/>
          </div>
          
        </div>
        <div  class="form-submit-btn"> 
          <a href="admin.php" ><input id="vbtn" type="button" value="Back"></a>
        </div>
        </div>
        </form>
        
        
 
    </div>

</article>
    </main>
  </div>
  <label for="sidebar-toggle" class="body-label"></label>
  <script src="script.js"></script>
</body>
</html>
