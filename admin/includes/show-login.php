<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('show-login').addEventListener('click', function () {
      const form = `
       
        <form id="examform" method="post">
          <div class="user_details">

            <div class="input_box">
              <label id="lbl" for="ename" class="custom-label">Name of Data</label> 
              <input id="inpt" type="text" id="ename" placeholder="Select or Enter Name" name="ename"> 
            </div>

            <div class="input_box">
              <label id="lbl" for="ejob" class="custom-label">Job Title</label> 
              <input id="inpt" type="text" id="ejob" list="ejob-scripts" placeholder="Select or Enter Job Title" name="ejob">
              <datalist id="ejob-scripts">
                <option value=" Registered Nurse ">
                <option value=" Surgeon ">
                <option value=" Medical Assistant ">
                <option value=" Radiology Technician ">
                <option value=" Pharmacist "> 
              </datalist>
            </div>

            <div class="input_box">
              <label id="lbl" for="edept" class="custom-label">Department/Unit</label> 
              <input id="inpt" type="text" id="edept" list="edept-scripts" placeholder="Select or Enter Department" name="edept">
              <datalist id="edept-scripts">
              <option value=" Cardiology ">
                <option value=" Surgery ">
                <option value=" Pediatrics ">
                <option value=" Emergency Department ">
                <option value=" Radiology ">  
              </datalist>
            </div>

            <div class="input_box">
              <label id="lbl" for="edate" class="custom-label">Data Date</label> 
              <input id="inpt" type="date" id="edate" placeholder="Enter Data Date" name="edate">
            </div>

            <div class="input_box">
              <label id="lbl" for="estatus" class="custom-label">Status</label> 
              <input id="inpt" type="text" id="estatus" list="estatus-scripts" placeholder="Select or Enter Status" name="estatus">
              <datalist id="estatus-scripts">
                <option value=" Full-time ">
                <option value=" Part-time ">
                <option value=" Temporary ">
                <option value=" Contract ">
                <option value=" Per Diem ">
              </datalist>
            </div> 

            <div class="input_box">
              <label id="lbl" for="eshift" class="custom-label">Shifts</label> 
              <input id="inpt" type="text" list="eshift-scripts" id="eshift" placeholder="Select or Enter Shifts" name="eshift">
              <datalist id="eshift-scripts">
                <option value=" Day Shift ">
                <option value=" Night Shift ">
                <option value=" Rotating Shifts ">
                <option value=" Weekend Shift ">
                <option value=" On-call ">
              </datalist>
            </div>

          </div>
          <div class="reg_btn">
            <input id="inptbtn" type="submit" value="Create Data" name="submit">
          </div>
        </form>
      `;

      Swal.fire({
        title: 'Create New Data',
        html: form,
        showCloseButton: true,
        showCancelButton: false, 
        showConfirmButton: false,
        customClass: {
          popup: 'custom-popup', 
          title: 'custom-popup_title', 
          content: 'custom-popup_user_details',
          label: 'custom-label', 
          confirmButton: 'reg_btn'
        }
      });
    });
  });
</script>
  <?php
include("connection.php");

$query = "SELECT * FROM info_table";
$result = mysqli_query($connections, $query);

if(isset($_POST["submit"])) {
  $ename = $_POST["ename"];
  $ejob = $_POST["ejob"];
  $edept = $_POST["edept"];
  $edate = $_POST["edate"];
  $estatus = $_POST["estatus"];
  $eshift = $_POST["eshift"];

  $sql = "INSERT INTO info_table(Ename, Ejob, Edept, Edate, Estatus, Eshift) VALUES ('$ename', '$ejob', '$edept', '$edate', '$estatus', '$eshift')";
  $result = mysqli_query($connections, $sql);

  if($result) {
    ?>
    <script>
  Swal.fire({
    icon: 'success',
    title: 'Data Created Successfully',
    showConfirmButton: false,
    timer: 1300,
    heightAuto: false,
    customClass: {
      popup: 'my-swal-popup' 
    }
  });

 
  setTimeout(() => {
    window.location.href = 'admin.php';
  }, 1300); 
</script>



    <?php
  } else {
    die(mysqli_error($connections));              
  }
}
?>
