<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT roll FROM roles WHERE id_role = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $selectedRole = $row['roll'];
        }
    }

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $newRole = $_POST['role'];
        $sql = "UPDATE roles 
                SET roll = '$newRole'
                WHERE id_role = $id";
        mysqli_query($conn, $sql);
        header("Location: newRole.php");         
    }    
?>
<?php include("header.php"); ?>
<section class="modifyDepartment">
    <div class="all-container">
        <h1 class="txtu">Modify Role</h1>
            <div class="department-info">
                <form action="newRoleModify.php?id=<?php echo $_GET['id'];?>" method="POST" class="form-layout">
                    <div class="form-field">
                        <label for="">Role:</label>
                        <input type="text" name="role" value="<?php echo $selectedRole; ?>" class="form-control">
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