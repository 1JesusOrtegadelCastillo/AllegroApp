<?php 
include("db.php");

//Getting id from selected user
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM employee WHERE e_id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
      // getting data from database 
        $row = mysqli_fetch_array($result);
        $ename = $row['e_name'];
        $eflastname = $row['e_f_lastname'];
        $emlastname = $row['e_m_lastname'];
        $ebirth = $row['e_dob'];
        $egender = $row['e_gender'];
        $eemail = $row['e_email'];
        $eaddress = $row['e_address'];
        $econtact = $row['e_contact'];
        $essn = $row['e_ssn'];
        $estudies = $row['grade_studies'];
        $emarital = $row['marital_status'];
        $erole = $row['e_role'];
        $edpmt = $row['department'];
        $ejtitle = $row['job_title'];
        $emethod = $row['mode_employment'];
        $emanager = $row['repor_manager'];
        $estatus = $row['employment_status'];
        $eenrollment = $row['enrollment_date'];
        $eres_date = $row['resignation_date'];
        $eres_comm = $row['resignation_comment'];
        $rehirable = $row['rehirable'];
    }
}

if(isset($_POST['update'])) {
  // taking values from input fields
    $id = $_GET['id'];
    $name = $_POST['ename'];
    $flastname = $_POST['eflastname'];
    $mlastname = $_POST['emlastname'];
    $birth = $_POST['e_dob'];    
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $ssn = $_POST['ssn'];
    $studies = $_POST['studies'];
    $marital = $_POST['marital'];
    $role = $_POST['role'];
    $department = $_POST['department'];
    $jtitle = $_POST['jtitle'];
    $employment_method = $_POST['method'];
    $repor_manager = $_POST['manager'];
    $status = $_POST['status'];
    $employment_date = $_POST['employment-date'];
    $resignation_date = $_POST['resignation-date'];
    $resignation_comm = $_POST['resignation-comm'];
    $rehirable = $_POST['radioRehirable'];

    // Modifying user information
    $sql = "UPDATE employee SET e_name = '$name', e_f_lastname = '$flastname', e_m_lastname = '$mlastname',
            e_dob = '$birth', e_gender = '$gender', e_email = '$email', e_address = '$address', e_contact = '$contact',
            e_ssn = '$ssn', grade_studies = '$studies', marital_status = '$marital', e_role = '$role', mode_employment = '$employment_method',
            department = '$department', job_title = '$jtitle', repor_manager = '$repor_manager', employment_status = '$status',
            enrollment_date = '$employment_date', resignation_date = '$resignation_date', resignation_comment = '$resignation_comm', rehirable = '$rehirable'          
             WHERE e_id = '$id'; ";
    mysqli_query($conn, $sql);
    header("Location: employees_all.php");
}

?>

<?php include("header.php")?>
<?php include("department_function.php"); ?>
<?php include("role_function.php"); ?>

<section class="modify-data">
  <div class="all-container modify-container">
    <h1 class="txtu">Modify employee info</h1>
     <div class="all-info-content">
       <form action="modify_employee.php?id=<?php echo $_GET['id']; ?>" method="POST" class="form-layout">
            <div class="form-field">
              <i class="fas fa-envelope"><label for="ename">Name:</label></i>
              <input type="text" name="ename" value="<?php echo $ename; ?>" class="form-control" placeholder="Actualizar nombre" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="eflastname">First Lastname:</label></i>
              <input type="text" name="eflastname" value="<?php echo $eflastname; ?>" class="form-control" placeholder="Actualizar Apellido" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="emlastname">Second Lastname:</label></i>
              <input type="text" name="emlastname" value="<?php echo $emlastname; ?>" class="form-control" placeholder="Segundo Apellido" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="e_dob">Date of Birth:</label></i>
              <input type="date" name="e_dob" value="<?php echo $ebirth; ?>" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="gender">Gender:</label></i>
              <select name="gender" id="gender">
                            <option value="Male" <?php if(isset($egender) && $egender == "Male") echo "selected" ?>>Male</option>
                            <option value="Female" <?php if(isset($egender) && $egender == "Female") echo "selected" ?>>Female</option>
              </select>
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="email">E-mail:</label></i>
              <input type="text" name="email" value="<?php echo $eemail; ?>" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="address">Address:</label></i>
              <input type="text" name="address" value="<?php echo $eaddress; ?>" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="contact">Contact Info:</label></i>
              <input type="text" name="contact" value="<?php echo $econtact; ?>" onkeypress="isNumber(event)" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="ssn">SSN:</label></i>
              <input type="text" name="ssn" value="<?php echo $essn; ?>" onkeypress="isNumber(event)" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="studies">Grade of Studies:</label></i>
              <select name="studies" id="studies">
                            <option value="High school" <?php if(isset($estudies) && $estudies == "High school") echo "selected" ?>>High School</option>
                            <option value="University" <?php if(isset($estudies) && $estudies == "University") echo "selected" ?>>University</option>
                            <option value="Masters Degree" <?php if(isset($estudies) && $estudies == "Masters Degree") echo "selected" ?>>Master's Degree</option>
                            <option value="PhD" <?php if(isset($estudies) && $estudies == "PhD") echo "selected" ?>>PhD</option>
                        </select>

            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="marital">Marital Status:</label></i>
              <select name="marital" id="marital">
                            <option value="Single" <?php if(isset($emarital) && $emarital == "Single") echo "selected" ?>>Single</option>
                            <option value="Married" <?php if(isset($emarital) && $emarital == "Married") echo "selected" ?>>Married</option>
                            <option value="Divorced" <?php if(isset($emarital) && $emarital == "Divorced") echo "selected" ?>>Divorced</option>
                            <option value="Widowed" <?php if(isset($emarital) && $emarital == "Widowed") echo "selected" ?>>Widowed</option>
                            <option value="Separated" <?php if(isset($emarital) && $emarital == "Separated") echo "selected" ?>>Separated</option>
                        </select>
            </div><!--form-field-->
            <div class="form-field">
              <i class="fas fa-envelope"><label for="role">Role: <a href="newRole.php" class="new-option"><i class="fas fa-plus"></i></a></label></i>

             <?php
                        // echo "<select name='role'>";
                        // echo '<option value="'.$row['e_role'].'">'.$row['e_role'].'</option>';
                        //  while($row = mysqli_fetch_array($sqlResult)) {
                        //   echo '<option value="'.$row['roll'].'">'. $row['roll'] .'</option>';
                        // }
                        // echo "</select>";
                        
                        echo "<select name='role'>";
                        echo '<option value="'.$row['e_role'].'">'.$row['e_role'].'</option>';
                        foreach($sqlResult as $rolles){
                          echo '<option value="'.$rolles['roll'].'">'.$rolles['roll'] .'</option>';
                        }
                        echo "</select>";
              ?>
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="department">Department: <a href="newItem_department.php" class="new-option"><i class="fas fa-plus"></i></a></label></i>
              <?php
                        echo "<select name='department'>";
                        echo '<option value="'.$row['department'].'">'.$row['department'].'</option>';
                        while($row = mysqli_fetch_array($queryResult)) {
                            echo '<option value="'.$row['department'].'">'. $row['department'] .'</option>';
                        }
                        echo "</select>";
              ?>
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="jtitle">Job Title: </label></i>
              <input type="text" name="jtitle" value="<?php echo $ejtitle; ?>" class="form-control" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="method">Mode of Employment:</label></i>
              <input type="text" name="method" value="<?php echo $emethod; ?>" class="form-control" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="manager">Reporting Manager:</label></i>
              <input type="text" name="manager" value="<?php echo $emanager; ?>" class="form-control" onkeyup="isLeter(this)">
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="status">Employee Status:</label></i>
              <select name="status" id="status">                           
                            <option value="Active" <?php if(isset($estatus) && $estatus == "Active") echo "selected" ?>>Active</option>
                            <option value="Inactive" <?php if(isset($estatus) && $estatus == "Inactive") echo "selected" ?>>Inactive</option>
              </select>
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="employment-date">Employment Date:</label></i>
              <input type="date" name="employment-date" value="<?php echo $eenrollment; ?>" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="resignation-date">Resignation Date:</label></i>
              <input type="date" name="resignation-date" value="<?php echo $eres_date; ?>" class="form-control" >
            </div><!--form-field-->

            <div class="form-field">
              <i class="fas fa-envelope"><label for="resignation-comm">Resignation Comments:</label></i>
              <textarea name="resignation-comm" rows="3" ><?php echo $eres_comm ?></textarea>
            </div><!--form-field-->

            <div class="form-field checkbox-field">
              <label for="radioRehirable">Re-hirable:</label></i>
              <p>Yes</p><input type="radio" value="Yes" name="radioRehirable" <?php if (isset($rehirable) && $rehirable=="Yes") echo "checked"; ?>>
              <p>No</p><input type="radio" value="No" name="radioRehirable" <?php if (isset($rehirable) && $rehirable=="No") echo "checked"; ?>>
            </div><!--form-field-->

            <div class="btn-insert">
              <button class="btn-success" name="update">
                <p>Modify</p>
              </button>
            </div><!--btn-modify-->
      </form>
     </div><!--all-info-content-->
  </div><!--all-container-->
</section>

<?php include("footer.php")?>