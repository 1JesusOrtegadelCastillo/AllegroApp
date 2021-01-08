<?php 
include("header.php");
include("newItem_function.php");
include("db.php");
?>


<div class="newItem all-container">
    <div class="newItem-content">
      <h3 class="txtu">Add a new department:</h3>
      <a href="javascript:history.go(-1)" class="btn-back-option"><i class="fas fa-arrow-left"></i></a>
       <div class="newItemForm">
        <form action="newItem_function.php" method="POST" class="newItem_form_class">
            <div class="newItem-input">
                <label for="">New department:</label>
                <input type="text" onkeyup="isLeter(this)" name="newDepartment" maxlength="17" autofocus>
            </div><!-- newItem-input -->
            <div class="newItemAction">
                <input type="submit" value="+" class="add-button" name="newItem">
            </div><!--newItemAction-->
        </form>
      </div><!--newItemForm--> 
      
    </div><!--newItem-content-->
    <div class="display-allItem all-container">
        <h1 class="txtu">Existing departments</h1>
        <div class="display-allItem-content">
            <table class="itemTable">
                <thead class="tableHeader">
                    <tr>
                        <th><p>Departments </p></th>
                        <th><p>Actions</p></th>
                    </tr>
                </thead>
                <tbody class="itemsTBody">
                    <?php
                        $query = "SELECT * FROM departments ORDER BY department";
                        $resultDepartment = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($resultDepartment)){ ?>
                            <tr>
                                <td><p><?php echo $row['department'];?></p></td>
                                <td>
                                    <a href="newItemModify.php?id=<?=$row['id_dpmt']; ?>" class="btn btn-modify"> <i class="fas fa-marker"></i> </a>
                                    <a href="newItemDelete.php?id=<?=$row['id_dpmt']; ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> </a>
                                </td>
                            </tr>                               
                        <?php } ?>
                </tbody>
            </table>
        </div><!--display-allItem-content-->
    </div><!--display-allItem-->
</div><!--newItem-->



<?php include("footer.php"); ?>