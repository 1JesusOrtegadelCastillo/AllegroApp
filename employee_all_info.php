<?php include("header.php");?> 
   <section class="all-employees">
    <div class="all-container info-all">
      <h1 class="txtu">All employees</h1>
      <div class="all-info-content">
   <?php 
  $conn = mysqli_connect("localhost", "root", "", "hresources");


   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM employee WHERE e_id = $id";
    $result = mysqli_query($conn, $sql);}
       while ($data = mysqli_fetch_array($result)) { ?>
        <div class="e-card">
          <img src="img/merce.jpg" alt="">
            <div class="e-card-info full-e-card-info">
              <h3 class="e_title"><span><?php echo $data['e_name'] . " " . $data['e_f_lastname'] . " " . $data['e_m_lastname'] ?></span></h3>
            <div class="e-card-id">
             <i class="far fa-id-card"><label for="">ID:</label></i><p><?php echo $data['e_id'] ?></p>
            </div><!--e-card-id-->
              <div class="e-card-name">
             <i class="far fa-id-card"><label for="">Name:</label></i><p><?php echo $data['e_name'] . " " . $data['e_f_lastname'] . " " . $data['e_m_lastname'] ?></p>
            </div><!--e-card-name-->
            <div class="e-card-email">
              <i class="fas fa-envelope"><label for="">E-mail:</label></i><p><?php echo $data['e_email'] ?></p>
             </div><!--e-card-email-->
             <div class="e-contact">
              <i class="far fa-id-card"><label for="">Contact:</label></i><p><?php echo $data['e_contact'] ?></p>
             </div><!--e-contact--> 
             <div class="e-dob">
              <i class="far fa-id-card"><label for="">Date of birth:</label></i><p><?php echo $data['e_dob'] ?></p>
             </div><!--e-dob--> 
             <div class="e-address">
              <i class="far fa-id-card"><label for="">Address:</label></i><p><?php echo $data['e_address'] ?></p>
             </div><!--e-address-->                 
             <div class="e-gender">
              <i class="far fa-id-card"><label for="">Gender:</label></i><p><?php echo $data['e_gender'] ?></p>
             </div><!--e-gender--> 
             <div class="e-ssn">
              <i class="far fa-id-card"><label for="">SSN:</label></i><p><?php echo $data['e_ssn'] ?></p>
             </div><!--e-ssn--> 
             <div class="e-marital-status">
              <i class="far fa-id-card"><label for="">Marital Status:</label></i><p><?php echo $data['marital_status'] ?></p>
             </div><!--e-marital-status--> 
             <div class="e-grade-studies">
              <i class="far fa-id-card"><label for="">Grade of Studies:</label></i><p><?php echo $data['grade_studies'] ?></p>
             </div><!--e-grade-studies--> 
             <div class="e-job-title">
              <i class="far fa-id-card"><label for="">Role:</label></i><p><?php echo $data['e_role'] ?></p>
             </div><!--e-sjob-title--> 
             <div class="department">
              <i class="far fa-id-card"><label for="">Department:</label></i><p><?php echo $data['department'] ?></p>
             </div><!--department--> 
             <div class="e-repor-manager">
              <i class="far fa-id-card"><label for="">Reporting Manager:</label></i><p><?php echo $data['repor_manager'] ?></p>
             </div><!--e--repor-manager--> 
             <div class="mode_employment">
              <i class="far fa-id-card"><label for="">Hiring method:</label></i><p><?php echo $data['mode_employment'] ?></p>
             </div><!--mode_employment--> 
             <div class="e-employment-status">
              <i class="far fa-id-card"><label for="">Employee status:</label></i><p><?php echo $data['employment_status'] ?></p>
             </div><!--e-employment-status--> 
             <div class="e-enrollment">
              <i class="far fa-id-card"><label for="">Hiring Date:</label></i><p><?php echo $data['enrollment_date'] ?></p>
             </div><!--e-enrollment--> 
             <div class="e-resignation">
              <i class="far fa-id-card"><label for="">Resignation Date:</label></i><p><?php echo $data['resignation_date'] ?></p>
             </div><!--e-resignation--> 

             <div class="e-repor-manager">
              <i class="far fa-id-card"><label for="">Re-hirable:</label></i><p><?php echo $data['rehirable'] ?></p>
             </div><!--e--repor-manager-->
             
             <div class="e-resignation-com">
              <i class="far fa-id-card"><label for="">Comments:</label></i><p><?php echo $data['resignation_comment'] ?></p>
             </div><!--e-resignation-com--> 
             
             <div class="e-card-actions full-e-card-actions">
               <a href="javascript:history.go(-1)" class="btn-back"><i class="fas fa-arrow-left"></i><input type="submit" value="" name="fullView"></a>
               <a href="modify_employee.php?id=<?php echo $data['e_id'] ?>" class="btn-modify"><input type="submit" value="Modify" name="fullView"></a>
             </div><!--e-card-actions-->
             <div class="modify">
            
             </div>
            </div><!--e-card-info-->
        </div><!--e-card -->
        <div class="uploadFiles">
          <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="file_path" style="display:none;" value=<?php echo $data['e_name'] . "_" . $data['e_f_lastname'] . "_" . $data['e_m_lastname'] ?>>
            <input type="file" name="file">
              <div class="uploadBtn">
                <button type="submit" name="submit">Upload</button>
              </div><!--uploadBtn-->
          </form>
        </div><!--uploadFiles-->
        <?php } ?>       

      </div><!-- all-e-content -->

    </div><!--all-container-->
  </section>

  <?php @include('footer.php'); ?>

