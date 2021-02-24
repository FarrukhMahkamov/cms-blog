<!-- POSTS -->
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
                Title
              </th>
              <th>
                Content
              </th>
              <th>
                Category
              </th>
              <th>
                Status
              </th>
              <th>
                Image
              </th>
              <th>
                Tags
              </th>
              <th>
                Comments
              </th>
              <th>
                Date
              </th>
              <th>
                Delete
              </th>
              <th>
                Edit
              </th>
            </thead>
            <tbody>
            <!-- Displaying posts -->


            <?php
              $query = "SELECT * FROM posts";
              $select_posts = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_posts)) {
              $post_id = $row['post_id'];
              $post_author = $row['post_author'];
              $post_title = $row['post_title'];
              $post_content = substr($row['post_content'],0,20) ;
              $post_category_id = $row['post_category_id'];
              $post_status = $row['post_status'];
              $post_image = $row['post_image'];
              $post_tags = $row['post_tags'];
              $post_comment_count = $row['post_comment_count'];
              $post_date = $row['post_date'];
              
              echo "<tr>";
              echo "<td>$post_id</td>";
              echo "<td>$post_author</td>";
              echo "<td>$post_title</td>";
              echo "<td>$post_content</td>";



              $query = "SELECT * FROM categories WHERE cat_id =  {$post_category_id} ORDER BY cat_id DESC";
              $select_categories_id = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($select_categories_id)) {
              $cat_id = $row['cat_id'];
              $cat_title = $row['cat_title'];
              }

              echo "<td>{$cat_title}</td>";



              echo "<td>$post_status</td>";
              echo "<td><img src='../img/blog/$post_image' alt='image' width='100'></td>";
              echo "<td>$post_tags</td>";
              echo "<td>$post_comment_count</td>";
              echo "<td>$post_date</td>";
              echo "<td> <button  class='btn btn-danger  btn-sm'><a style='color: white;' href='posts.php?delete={$post_id}'>Delete</a></button></td>";
              echo "<td> <button  class='btn btn-warning  btn-sm'><a style='color: white;' href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></button></td>";
              echo "</tr>";
    
          }
            ?>
            <?php 
              if (isset($_GET['delete'])) {
                $the_post_id = $_GET['delete'];
                $query = "DELETE FROM posts WHERE post_id = {$the_post_id}";
                $delete_query = mysqli_query($connection, $query);
                
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