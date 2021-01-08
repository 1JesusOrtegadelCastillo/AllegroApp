<?php include("header.php") ?>
<?php include("db.php") ?>
<?php include("newItem_Role_function.php") ?>

<div class="newItem all-container">
    <div class="newItem-content">
      <h3 class="txtu">Add a new Role:</h3>
      <a href="javascript:history.go(-1)" class="btn-back-option"><i class="fas fa-arrow-left"></i></a>
       <div class="newItemForm">
        <form action="newItem_Role_function.php" method="POST" class="newItem_form_class">
            <div class="newItem-input">
                <label for="">New Role:</label>
                <input type="text" onkeyup="isLeter(this)" name="newRole" maxlength="17" autofocus>
            </div><!-- newItem-input -->
            <div class="newItemAction">
                <input type="submit" value="+" class="add-button" name="newItem">
            </div><!--newItemAction-->
        </form>
      </div><!--newItemForm--> 
      
    </div><!--newItem-content-->
    <div class="display-allItem all-container">
        <h1 class="txtu">Existing Role</h1>
        <div class="display-allItem-content">
            <table class="itemTable">
                <thead class="tableHeader">
                    <tr>
                        <th><p> Role</p></th>
                        <th><p>Actions</p></th>
                    </tr>
                </thead>
                <tbody class="itemsTBody">
                    <?php
                        $query = "SELECT * FROM roles ORDER BY roll";
                        $resultRole = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($resultRole)){ ?>
                            <tr>
                                <td><p><?php echo $row['roll'];?></p></td>
                                <td>
                                <a href="newRoleModify.php?id=<?=$row['id_role']; ?>" class="btn btn-modify"> <i class="fas fa-marker"></i> </a>
                                <a href="newRoleDelete.php?id=<?=$row['id_role']; ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a>
                            </td>
                            </tr>    
                           
                        <?php } ?>
                </tbody>
            </table>
        </div><!--display-allItem-content-->
    </div><!--display-allItem-->
</div><!--newItem-->

<?php include("footer.php") ?>