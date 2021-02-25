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
                Author
              </th>
              <th>
                Email
              </th>
              <th>
                Comment
              </th>
              <th>
                Status
              </th>
              <th>
              INT 
              <!-- In response to  -->
              </th>
              <th>
                Date
              </th>
              <th>
                Approve
              </th>
              <th>
                Unapprove
              </th>
              <th>
                Delete
              </th>
            
            </thead>
            <tbody>
            <!-- Displaying posts -->


            <?php
              $query = "SELECT * FROM comments";
              $select_comments = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_comments)) {
              $comment_id = $row['comment_id'];
              $comment_post_id = $row['comment_post_id'];
              $comment_author = $row['comment_author'];
              $comment_email = $row['comment_email'];
              $comment_content = substr($row['comment_content'],0,50); 
              $comment_status = $row['comment_status'];
              $comment_date = $row['comment_date'];
              
              echo "<tr>";
              echo "<td>$comment_id</td>";
              echo "<td>$comment_author</td>";
              echo "<td>$comment_email</td>";
              echo "<td>$comment_content</td>";



            //   $query = "SELECT * FROM categories WHERE cat_id =  {$post_category_id}";
            //   $select_categories_id = mysqli_query($connection,$query);
            //   while($row = mysqli_fetch_assoc($select_categories_id)) {
            //   $cat_id = $row['cat_id'];
            //   $cat_title = $row['cat_title'];
            //   }

            //   echo "<td>{$cat_title}</td>";



            //   echo "<td>$comment_email</td>";
              echo "<td>$comment_status</td>";

              $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
              $select_post_id_query = mysqli_query($connection,$query);

              while($row = mysqli_fetch_assoc($select_post_id_query)){
                $post_id = $row['post_id'];
                $post_title = $row['post_title'];

                echo "<td><a href='../post.php?p_id=$post_id'>$post_title</a></td>";
              }

              
              echo "<td>$comment_date</td>";
              echo "<td> <button  class='btn btn-success  btn-sm'><a style='color: white;' href='comments.php?approve=$comment_id'>Approve</a></button></td>";
              echo "<td> <button  class='btn btn-warning  btn-sm'><a style='color: white;' href='comments.php?unapprove=$comment_id'>Unapprove</a></button></td>";
              echo "<td> <button  class='btn btn-danger  btn-sm'><a style='color: white;' href='comments.php?delete=$comment_id'>Delete</a></button></td>";
              echo "</tr>";
    
          }
            ?>
            <?php 
            // Deleting users
            if (isset($_GET['delete'])) {
            $the_comment_id = $_GET['delete'];
            $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id}";
            $delete_comments = mysqli_query($connection, $query);
            header("Location: comments.php");
          }
     

              // Approve 
               if (isset($_GET['approve'])) {
                $the_comment_id = $_GET['approve'];
                $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = $the_comment_id ";
                $aprove_comment_query = mysqli_query($connection, $query);
                header("Location: comments.php");
              }
              //End of approve 

              // Unnapprove 
              if (isset($_GET['unapprove'])) {
                $the_comment_id = $_GET['unapprove'];
                $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = $the_comment_id ";
                $unnaprove_comment_query = mysqli_query($connection, $query);
                header("Location: comments.php");
              }
              //End of unnapprove 

            
            ?>
            <!-- End of displaying posts -->

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- END OF POSTS -->