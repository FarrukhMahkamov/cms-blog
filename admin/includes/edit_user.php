<div class="col-lg-8">
<?php
if(isset($_GET['edit_user'])){
  $the_user_id = $_GET['edit_user'];
   
  $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
    $select_users_query = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($select_users_query)) {
    $user_id = $row['user_id'];
    $user_name = $row['user_name'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname']; 
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];
    $user_password = $row['user_password'];
    }
}
  if(isset($_POST['edit_user'])) {
  
 $user_firstname = $_POST['user_firstname']; 
 $user_lastname = $_POST['user_lastname'];
 $user_name = $_POST['user_name'];
 $user_email = $_POST['user_email'];
 $user_password = $_POST['user_password'];
 $user_role = $_POST['user_role'];
 
   $query = "
   UPDATE users 
   SET user_firstname = '$user_firstname'
     , user_lastname = '$user_lastname'
     , date = now()
     , user_name = '$user_name'
     , user_email = '$user_email'
     , user_password = '$user_password'
     , user_role = '$user_role'
      WHERE user_id = $the_user_id;
   ";
 
 
  $update_user = mysqli_query($connection, $query);
  if (!$update_user) {
    echo "Itsnot woking " . mysqli_error($connection);
  }
 
 }
?>

    <form action="" method="POST" enctype="multipart/form-data">
   
    <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">First Name</label>
         <input type="text" class="form-control" id="exampleInput1" value="<?php echo $user_firstname; ?>" name="user_firstname">
       </div>
       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
         <input type="text" class="form-control" id="exampleInput1" value="<?php echo $user_lastname; ?>" name="user_lastname">
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Name</label>
         <input type="text" class="form-control"  value="<?php echo $user_name; ?>" id="exampleInput1" name="user_name">
       </div>
           
       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Email</label>
         <input type="email" class="form-control" id="exampleInput1" value="<?php echo $user_email; ?>" name="user_email">
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Password</label>
         <input type="password" class="form-control" id="exampleInput1"  value="<?php echo $user_password; ?>" name="user_password">
       </div>

       <div class="form-group">
        <select name="user_role" id="" data-style="btn btn-link" > 
        <option value="subscriber"><?php echo $user_role; ?></option>
        <?php
          if ($user_role == 'admin') {
            echo "<option value='subscriber'>Subscriber</option>";
          }else {
            echo "<option value='admin'>Admin</option>";
          }
        ?>
          
        
        </select>
       </div>
       <div></div>
       

      <div class="form-group">
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail img-raised">  
           </div>
            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
             <div>
               <span class="btn btn-raised btn-round btn-default btn-file">
              <span class="fileinput-new">Select image</span>
            <input type="file" name="image">
            </span>
            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
         </div>
       </div>
      </div>
    
    

  <div class="form-group">
  <input type="submit" class="btn btn-success" name="edit_user" value="Edit User">
  </div>


           
    </form>
</div>