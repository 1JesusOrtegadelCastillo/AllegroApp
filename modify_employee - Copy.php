<?php 
include("db.php");
$conn = mysqli_connect("localhost", "root", "", "hresources");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM employee WHERE e_id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $name = $row['e_name'];
        $flastname = $row['e_f_lastname'];
        $mlastname = $row['e_m_lastname'];
        $dpmt = $row['department'];
    }
}

if(isset($_POST['update'])) { 
    $id = $_GET['id'];
    $name = $_POST['ename'];
    $flastname = $_POST['eflastname'];
    $mlastname = $_POST['emlastname'];
    $dpmt = $_POST['edepartment'];

    $sql = "UPDATE employee SET e_name = '$name', e_f_lastname = '$flastname', e_m_lastname = '$mlastname', department = '$dpmt' WHERE e_id = '$id'; ";
    mysqli_query($conn, $sql);
    header("Location: employees_all.php");
}

?>

<?php include("header.php")?>

<section class="modify-data">
  <div class="all-container">
    <h1 class="txtu">Modify employee info</h1>
     <div class="all-info-content">
       <form action="modify_employee.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-field">
              <i class="fas fa-envelope"><label for="ename">Name:</label></i>
              <input type="text" name="ename" value="<?php echo $name; ?>" class="form-control" placeholder="Actualizar nombre">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="eflastname">First Lastname:</label></i>
              <input type="text" name="eflastname" value="<?php echo $flastname; ?>" class="form-control" placeholder="Actualizar nombre">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="emlastname">Second Lastname:</label></i>
              <input type="text" name="emlastname" value="<?php echo $mlastname; ?>" class="form-control" placeholder="Actualizar nombre">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="edepartment">Department:</label></i>
              <input type="text" name="edepartment" value="<?php echo $dpmt; ?>" class="form-control" placeholder="Actualizar nombre">
            </div><!--form-field-->
              

              <button class="btn-success" name="update">
                Modificar
              </button>
      </form>
     </div><!--all-info-content-->
  </div><!--all-container-->
</section>

<?php include("footer.php")?>