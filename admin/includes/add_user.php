<div class="col-lg-8">
<?php
  if(isset($_POST['create_user'])) {
  
 $user_firstname = $_POST['user_firstname']; 
 $user_lastname = $_POST['user_lastname'];
 $user_name = $_POST['user_name'];
 $user_email = $_POST['user_email'];
 $user_password = $_POST['user_password'];
 $user_role = $_POST['user_role'];
 
 $query = "INSERT INTO users(user_firstname, user_lastname, user_name , user_email, user_password, user_role ) ";

  $query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$user_name}','{$user_email}','{$user_password}','{$user_role}') ";

  $create_user_query = mysqli_query($connection, $query);
 if (!$create_user_query) {

   die('QUERY FAILED' . mysqli_error($connection));
}
 }
?>

    <form action="" method="POST" enctype="multipart/form-data">
   
    <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">First Name</label>
         <input type="text" class="form-control" id="exampleInput1" name="user_firstname">
         <span class="bmd-help">First Name</span>
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Last Name</label>
         <input type="text" class="form-control" id="exampleInput1" name="user_lastname">
         <span class="bmd-help">Last Name</span>
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Name</label>
         <input type="text" class="form-control" id="exampleInput1" name="user_name">
         <span class="bmd-help">User Name</span>
       </div>
           
       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Email</label>
         <input type="email" class="form-control" id="exampleInput1" name="user_email">
         <span class="bmd-help">Email</span>
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">User Password</label>
         <input type="password" class="form-control" id="exampleInput1" name="user_password">
         <span class="bmd-help">Password</span>
       </div>

       <div class="form-group">
        <select name="user_role" id="" data-style="btn btn-link" > 
          <option value="subscriber">Select options</option>
          <option value="admin">Admin</option>
          <option value="subscriber">Subscriber</option>
        </select>
       </div>
       <div></div>
       <!-- test -->

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
  <input type="submit" class="btn btn-success" name="create_user" value="Add User">
  </div>


           
    </form>
</div>