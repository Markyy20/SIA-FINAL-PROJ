
<!DOCTYPE html>
<html lang="en">    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="x-icon" href="tnvs-logo.png">
  <link rel="stylesheet" type="text/css" href="css/action.css">
  <link rel="stylesheet" type="text/css" href="css/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="sweetalert2.js"></script>

 
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
    $id = $_GET["ID"];
    include("connection.php");
    $sql = "SELECT * FROM info_table WHERE ID = $id LIMIT 1";
    $result = mysqli_query($connections, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
<article>
<div id="edit-container" class="edit-container">
      <h1 id="etitle" class="form-title">Hospital Data Records</h1>
      <form method="post">
      
        <div class="main-user-info">
          <div class="user-input-box">
            <label id="elbl" for="fullName">Name</label>
            <input id="einpt" type="text"
                    id="fullName"
                    name="ename"
                    list="ename-scripts"
                    value="<?php echo $row['Ename'] ?>"/> 
          </div>

          <div class="user-input-box">
            <label id="elbl" for="username">Job Title</label>
            <input id="einpt" type="text"
                    id="username"
                    name="ejob"
                    list="ejob-scripts"
                    value="<?php echo $row['Ejob'] ?>"/>
              <datalist id="ejob-scripts">
                <option value=" Registered Nurse ">
                <option value=" Surgeon ">
                <option value=" Medical Assistant ">
                <option value=" Radiology Technician ">
                <option value=" Pharmacist "> 
              </datalist>
          </div>

          <div class="user-input-box">
            <label id="elbl" for="email">Department</label>
            <input id="einpt" type="text"
                    id="email"
                    name="edept"
                    list="edept-scripts"
                    value="<?php echo $row['Edept'] ?>" />
              <datalist id="edept-scripts">
              <option value=" Cardiology ">
                <option value=" Surgery ">
                <option value=" Pediatrics ">
                <option value=" Emergency Department ">
                <option value=" Radiology ">  
              </datalist>
          </div>

          <div class="user-input-box">
            <label id="elbl" for="phoneNumber">Date of Hire</label>
            <input id="einpt" type="date"
                    id="phoneNumber"
                    name="edate"
                    value="<?php echo $row['Edate'] ?>"/>
          </div>

          <div class="user-input-box">
            <label id="elbl" for="password">Status</label>
            <input id="einpt" type="text"
                    id="password"
                    name="estatus"
                    list="estatus-scripts"
                    value="<?php echo $row['Estatus'] ?>"/>
              <datalist id="estatus-scripts">
                <option value=" Full-time ">
                <option value=" Part-time ">
                <option value=" Temporary ">
                <option value=" Contract ">
                <option value=" Per Diem ">
              </datalist>
          </div>

          <div class="user-input-box">
            <label id="elbl" for="confirmPassword">Shift Schedule</label>
            <input id="einpt" type="text"
                    id="confirmPassword"
                    name="eshift"
                    list="eshift-scripts"
                    value="<?php echo $row['Eshift'] ?>"/>
                <datalist id="eshift-scripts">
                <option value=" Day Shift ">
                <option value=" Night Shift ">
                <option value=" Rotating Shifts ">
                <option value=" Weekend Shift ">
                <option value=" On-call ">
              </datalist>
          </div>
          
        </div>
        <div id="ebtns" class="form-submit-btn">
         <button  id="ebtn" type="submit" class="btn-up" name ="submit" >Update</button>
          <a href="admin.php" ><input id="ebtn" type="button" value="Cancel"></a>
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
<?php
if(isset($_POST["submit"])){
  $ename = $_POST["ename"];
  $ejob = $_POST["ejob"];
  $edept = $_POST["edept"];
  $edate = $_POST["edate"];
  $estatus = $_POST["estatus"];
  $eshift = $_POST["eshift"];

 $sql = "UPDATE info_table SET Ename='$ename', Ejob='$ejob', Edept='$edept', Edate='$edate', Estatus='$estatus', Eshift='$eshift' WHERE ID=$id";
  $result = mysqli_query($connections, $sql);
 if($result){
  ?>
  <script>
  Swal.fire({
    title: 'GREAT!',
    text: 'Successfully Updated!',
    icon: 'success',
    confirmButtonText: 'Okay',
    customClass: {
      confirmButton: 'btn-okay' 
    }
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'admin.php';
    }
  });
</script>



  <?php
 }
 else{
  die(mysqli_error($connections));
 }

}
    ?>
