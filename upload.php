<?php include('header.php'); ?>

<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    // File info
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    // Getting file extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    // Extensions allowed
    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx');

   // var_dump($_POST);

    // validating if the ext is allowed
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true). "." . $fileActualExt; // creates a unique name
                //$fileDestination = 'assets/' . $fileNameNew;
                $fileDestination = "C:/xampp/htdocs/humanresources/assets/".$_POST['file_path'].'/'. $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
              //  header("Location:index.php");
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "You cannot upload files of this type!";
    }


}

?>

<?php include('footer.php'); ?>