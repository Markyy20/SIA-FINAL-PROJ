<?php          include("includes/head.php");          ?>

<body>
  <input type="checkbox" name="" id="sidebar-toggle">

<?php          include("includes/lm-sidebar.php");          ?>

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
         
    <div id="tblhead" class="card-header ">
      
        
        <div id="tbl" class="card mt-2">
        <div class="tblheadertiltle"> 
                  <h2 id="tbltitle">Human Capital Management Records</h2>
                  </div> 
      <div class="row justify-content-start">  
        <div class="col-md-6"> 
          <form action="" method="GET"> 
            <div class="input-group "> 
                <div id="addatabtn"> 
                   <?php          include("includes/show-login.php");          ?></div>
                </div>

            </div>
          </form>
          
      </div>
        
    </div>

    <div id="tblbody" class="card-body mb-3" style="max-height: 400px; overflow-y: auto;">
        <table class="table table-responsive text-center table-hover">
            <tr id="tables">
                <td id="cell1">ID</td>
                <td id="cell1">Name</td>
                <td id="cell1">Job Title</td>
                <td id="cell1">Department</td>
                <td id="cell1">Date of Hire</td>
                <td id="cell1">Status</td>
                <td id="cell1">Shift Schedule</td>
                <td id="cell1">Action</td> 
            </tr>

            <?php

            if(isset($_GET['search'])) {
                $search = mysqli_real_escape_string($connections, $_GET['search']);
                $query = "SELECT * FROM info_table WHERE Ename LIKE '%$search%' OR Ejob LIKE '%$search%' OR Edept LIKE '%$search%' OR Edate LIKE '%$search%' OR Estatus LIKE '%$search%' OR Eshift LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM info_table";
            }

            $result = mysqli_query($connections, $query);

            if(mysqli_num_rows($result) == 0) {
                echo "<tr><td colspan='8'>No records found.</td></tr>";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td id="cell2"><?php echo $row['ID'] ?></td>
                        <td id="cell2"><?php echo $row['Ename'] ?></td>
                        <td id="cell2"><?php echo $row['Ejob'] ?></td>
                        <td id="cell2"><?php echo $row['Edept'] ?></td>
                        <td id="cell2"><?php echo $row['Edate'] ?></td>
                        <td id="cell2"><?php echo $row['Estatus'] ?></td>
                        <td id="cell2"><?php echo $row['Eshift'] ?></td>
                        <td id="cell2">
                          <div id="actbtns1">
                            <button onclick="view(<?php echo $row['ID']; ?>)" id="actbtn1"><i class="las la-eye" ></i></button> 
                            <button onclick="edit(<?php echo $row['ID']; ?>)" id="actbtn2"><i class="las la-edit" ></i></button>  
                            <button onclick="del(<?php echo $row['ID']; ?>)" id="actbtn3"><i class="las la-trash" ></i></button>
                          </div>  
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

        </table>
        
    </div>
    
    <div class="footer"><button type="button" id="show-login" class="addbtn"></i>+ New Records</button></div>
</div>

</div>

  </main>
</div>

  <label for="sidebar-toggle" class="body-label"></label>
<script src="script.js"></script>
<script src="sweetalert2.js"></script>
<script>
  function del(id) {
    Swal.fire({
      title: "Are you sure you want to delete this?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#0B60B0",
      cancelButtonColor: "#378CE7", 
      confirmButtonText: "Delete",
      cancelButtonText: "Cancel",
      dangerMode: true,
      customClass: {
        confirmButton: "btn-confirm",
        cancelButton: "btn-cancel"
      }
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "The data has been deleted!",
          icon: "success",
        }).then(() => {
          window.location.href = "delete.php?ID=" + id;
        });
      }
    });
  }
</script>


    
</script>
</body>
</html>
