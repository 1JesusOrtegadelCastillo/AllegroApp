<?php
// including connection
include("db.php");
//$conn = mysqli_connect("localhost", "root", "", "hresources");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Receiving user information from form action create-new-employee and saving user info into variables
if (isset($_POST['create-new-employee'])){
        $username = $_POST['employee_name'];
        $first_lastname = $_POST['employee_first_lastname'];
        $second_lastname = $_POST['employee_second_lastname'];
        $birth = $_POST['employee_dob'];
        $gender = $_POST['gender'];
        $email = $_POST['employee_email'];
        $address = $_POST['employee_address'];
        $contact = $_POST['employee_contact'];
        $essn = $_POST['employee_ssn'];
        $studies = $_POST['employee_studies'];
        $mstatus = $_POST['employee_marital'];
        $role = $_POST['employee_role'];
        $department = $_POST['employee_department'];
        $jtitle = $_POST['employee_title'];
        $emethod = $_POST['employee_method'];
        $manager = $_POST['employee_manager'];
        $status = $_POST['employee_status'];
        $enroll_date = $_POST['employee_enrollment'];

        // creating query with provided user info and sending it to database
        $query = "INSERT INTO employee
        (
            e_name, e_f_lastname, e_m_lastname, e_dob, e_gender,
            e_email, e_address, e_contact, e_ssn, grade_studies,
            marital_status, e_role, department,
            job_title, mode_employment, repor_manager, employment_status,
            enrollment_date
        )
        VALUES
         (
            '$username', '$first_lastname', '$second_lastname', '$birth',
            '$gender', '$email', '$address', '$contact', '$essn', '$studies',
            '$mstatus', '$role', '$department', '$jtitle', '$emethod', '$manager',
            '$status', '$enroll_date'
        )";

        #CREATING NEW FOLDER    

        // Creating new dir
        if($username && $email)
        {
            $dirname = "C:/xampp/htdocs/humanresources/assets/".trim($username).'_'.trim($first_lastname).'_'.trim($second_lastname);
            mkdir($dirname);
        }

        // executing query
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Fail on posting information");
        }

        // redirecting user to index.php once he sended the info
        header("Location:employees_all.php");
}

?>