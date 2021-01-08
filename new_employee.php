
<!doctype html>
<html class="no-js" lang="es">
<head>
  <meta charset="utf-8">
  <title>HR</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
</head>
<body>
<?php 
// INCLUDES
include("header.php");
include("department_function.php");
include("role_function.php");
?>
<section class="newEmployee">
    <div class="all-container">
        <h1 class="txtu new-title">Create new Employee</h1>
            <div class="new-e-content">
                <div class="new-e-profile">
                    <img src="img/merce.jpg" alt="">
                </div><!--new-e-profile-->
                <form action="create-new-employee.php" method="POST" class="form-layout">
                    <div class="form-field grid-name">
                        <label for="">Name:</label>
                        <input type="text" name="employee_name" id="employee_name" onkeyup="isLeter(this)" placeholder=" Employee name" autofocus required>
                    </div><!--name-form-field-->
                    <div class="form-field grid-flastname">
                        <label for="">First Lastname:</label>
                        <input type="text" name="employee_first_lastname" id="employee_first_lastname" onkeyup="isLeter(this)" placeholder=" Father's Lastname" required>
                    </div><!--first-lastname-form-field-->
                    <div class="form-field grid-mlastname">
                        <label for="">Second Lastname:</label>  
                        <input type="text" name="employee_second_lastname" id="employee_second_lastname" onkeyup="isLeter(this)" placeholder=" Mother's Lastname" required>
                    </div><!--Second-name-form-field-->
                    <div class="form-field grid-dob">
                        <label for="">Date of Birth:</label>
                        <input type="date" name="employee_dob" id="employee_dob" class="input-date" required>
                    </div><!--date-form-field-->
                    <div class="form-field grid-gender">
                        <label for="" class="label-option">Gender: </label>
                        <select name="gender" id="gender" placeholder="Select gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div><!--Gnder-form-field-->
                    <div class="form-field grid-email">
                        <label for="">E-mail:</label>
                        <input type="email" name="employee_email" id="employee_email"  placeholder=" employee@example.com" required>
                    </div><!--email-form-field-->
                    <div class="form-field grid-address">
                        <label for="">Address:</label>
                        <input type="text" name="employee_address" id="employee_address" placeholder=" New address" required>
                    </div><!--address-form-field-->
                    <div class="form-field grid-contact">
                        <label for="">Contact:</label>
                        <input type="text" name="employee_contact" id="employee_contact" onkeypress="isNumber(event)" placeholder=" Max 10 digits" required>
                    </div><!--Contact-form-field-->
                    <div class="form-field grid-ssn">
                        <label for="">SSN:</label>
                        <input type="text" name="employee_ssn" id="employee_ssn" onkeypress="isNumber(event)" placeholder=" 11 Digits" required>
                    </div><!--ssn-form-field-->
                    <div class="form-field grid-studies">
                        <label for="" class="label-option">Grade of studies: </label>
                        <select name="employee_studies" id="employee_studies" required>
                            <option value="High school">High School</option>
                            <option value="University">University</option>
                            <option value="Masters Degree">Master's Degree</option>
                            <option value="PhD">PhD</option>
                        </select>
                    </div><!--Grade-studies-form-field-->
                    <div class="form-field grid-marital">
                        <label for="" class="label-option">Marital Status: </label>
                        <select name="employee_marital" id="employee_marital">
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                        </select>
                    </div><!--marital-form-field-->
                    <div class="form-field grid-role">
                        <label for="" class="label-option">Role: <a href="newRole.php" class="new-option"><i class="fas fa-plus"></i></a></label>
                        <?php
                        echo "<select name='employee_role' required>";
                        echo '<option value="0">Select a Role</option>';
                        while($row = mysqli_fetch_assoc($sqlResult)) 
                        {                            
                            echo '<option value="'.$row['roll'].'">'. $row['roll'] .'</option>';
                        }
                        echo "</select>";
                        ?>
                        <!--<input type="text" name="employee_role" id="employee_role" placeholder=" Ex: Agent" onkeyup="isLeter(this)" required>-->
                    </div><!--Role-form-field-->
                    <div class="form-field grid-dpmt">
                        <label for="" class="label-option">Department: <a href="newItem_department.php" class="new-option"><i class="fas fa-plus"></i></a></label>
                       <!-- <input type="text" name="employee_department" id="employee_department" placeholder=" OPTION FIELD" onkeyup="isLeter(this)" required> -->
                       <?php
                        echo "<select name='employee_department' required>";
                        echo '<option value="0">Select a department</option>';
                        while($row = mysqli_fetch_array($queryResult)) 
                        {
                            // echo "<option value='$row['department']'>" . $row['department'] . "</option>";
                            
                            echo '<option value="'.$row['department'].'">'. $row['department'] .'</option>';
                        }
                        echo "</select>";
                        ?>
                    </div><!--Department-form-field-->
                    <div class="form-field grid-job-title">
                        <label for="">Job Title:</label>
                        <input type="text" name="employee_title" id="employee_title" placeholder="Job title" onkeyup="isLeter(this)" required> 
                    </div><!--job-title-form-field-->
                    <div class="form-field grid-method">
                        <label for="">Employment method:</label>
                        <input type="text" name="employee_method" id="employee_method" onkeyup="isLeter(this)" placeholder=" Ex: Computrabajo">
                    </div><!--method-form-field-->
                    <div class="form-field grid-manager">
                        <label for="">Reporting Manager:</label>
                        <input type="text" name="employee_manager" id="employee_manager" placeholder=" Boss name" onkeyup="isLeter(this)" required>
                    </div><!--manager-form-field-->
                    <div class="form-field grid-status">
                        <label for="">Employment Status: </label>                                    
                        <select name="employee_status" id="status" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div><!--Status-form-field-->
                    <div class="form-field grid-enroll">
                        <label for="">Enrollment Date:</label>
                        <input type="date" name="employee_enrollment" id="employee_enrollment" required>
                    </div><!--enrollment-form-field-->
                    <div class="btn-insert">
                    <input type="submit" class="button-insert" name="create-new-employee" value="Crear">
                </div><!--btn-insert-->
                </form>
            </div><!--new-e-content-->
    </div>
</section>
<?php @include("footer.php"); ?>