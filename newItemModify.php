<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT department FROM departments WHERE id_dpmt = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $selectedDepartment = $row['department'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $newDepartment = $_POST['department'];
        $sql = "UPDATE departments 
                SET department = '$newDepartment'
                WHERE id_dpmt = $id";
        mysqli_query($conn, $sql);
        header("Location: newItem_department.php");         
    }    
?>
<?php include("header.php"); ?>
<section class="modifyDepartment">
    <div class="all-container">
        <h1 class="txtu">Modify department</h1>
            <div class="department-info">
                <form action="newItemModify.php?id=<?php echo $_GET['id'];?>" method="POST" class="form-layout">
                    <div class="form-field">
                        <label for="">Department:</label>
                        <input type="text" name="department" value="<?php echo $selectedDepartment; ?>" class="form-control">
                    </div><!--form-field-->
                    <div class="btn-insert">
                        <button class="btn-success" name="update">
                            <p>Modify</p>
                        </button>
                    </div><!--btn-insert-->
                </form>
            </div><!--department-info-->
    </div><!-- all-container -->
</section>

<?php include("footer.php"); ?>