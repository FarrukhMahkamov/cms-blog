<!-- POSTS -->
<?php
   ob_start();
?>
<div class="col-md-12">
              <div class="card card-plain">
      <div class="card-header card-header-primary">
        <h5 class="card-title"><a href="posts.php?source=add_post" > If you want add post click here  &#x1F642</a></h5>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="">
              <th>
                ID
              </th>
              <th>
                User Name
              </th>
              <th>
                First Name
              </th>
              <th>
                Last Name
              </th>
              <th>
                Email
              </th>
              <th>
              Role
              <!-- In response to  -->
              </th>
              <th>
               Image
              </th>
              <!-- <th>
                Date
              </th> -->
              
            
            </thead>
            <tbody>
            <!-- Displaying posts -->


            <?php
              $query = "SELECT * FROM users";
              $select_users = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_users)) {
              $user_id = $row['user_id'];
              $user_name = $row['user_name'];
              $user_firstname = $row['user_firstname'];
              $user_lastname = $row['user_lastname']; 
              $user_email = $row['user_email'];
              $user_image = $row['user_image'];
              $user_role = $row['user_role'];
             
              
              echo "<tr>";
              echo "<td>$user_id</td>";
              echo "<td>$user_name</td>";
              echo "<td>$user_firstname</td>";
              echo "<td>$user_lastname</td>";
              echo "<td>$user_email</td>";
              echo "<td>$user_role</td>";
              echo "<td>$user_image</td>";
              echo "<td>$comment_date</td>";
              echo "<td> <button  class='btn btn-success  btn-sm'><a style='color: white;' href='users.php?change_to_admin=$user_id'>Admin</a></button></td>";
              echo "<td> <button  class='btn btn-warning  btn-sm'><a style='color: white;' href='users.php?change_to_sub=$user_id'>Subscriber</a></button></td>";
              echo "<td> <button  class='btn btn-danger  btn-sm'><a style='color: white;' href='users.php?delete=$user_id'>Delete</a></button></td>";
              echo "<td> <a href='user.php?source=edit_user&edit_user={$user_id}'><i class='fas fa-user-edit'></i></a></td>";
              echo "</tr>";

          }
            ?>
       <?php 

        if (isset($_GET['change_to_admin'])) {
        $the_user_id = $_GET['change_to_admin'];
        $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $the_user_id ";
        $change_to_admin_query = mysqli_query($connection, $query);
        header("Location: users.php");
      }

        if (isset($_GET['change_to_sub'])) {
        $the_user_id = $_GET['change_to_sub'];
        $query = "UPDATE users SET user_role = 'Subscriber' WHERE user_id = $the_user_id ";
        $change_to_sub_query = mysqli_query($connection, $query);
        header("Location: users.php");     
        }

        if (isset($_GET['delete'])) {
        $the_user_id = $_GET['delete'];
        $query = "DELETE FROM users WHERE user_id = {$the_user_id}";
        $delete_users = mysqli_query($connection, $query);
        header("Location: users.php");
       }
      ?>
     

            <!-- End of displaying posts -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- END OF POSTS -->