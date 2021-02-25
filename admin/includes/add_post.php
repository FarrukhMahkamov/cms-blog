<div class="col-lg-8">
<?php
  if(isset($_POST['create_post'])) {
     $post_category_id = $_POST['post_category']; 
     $post_image = $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
     $post_title = $_POST['post_title'];
     $post_content = $_POST['post_content'];
     $post_author = $_POST['post_author'];
     $post_tags = $_POST['post_tag'];
     $post_status = $_POST['post_status'];
    
     move_uploaded_file($post_image_temp, "../img/blog/$post_image" );
  
     $query = "INSERT INTO posts(post_category_id, post_image, post_date, post_title, post_content, post_author, post_tags, post_status) ";
    
     $query .= "VALUES ({$post_category_id},'{$post_image}',now(),'{$post_title}','{$post_content}','{$post_author}','{$post_tags}','{$post_status}' ) ";

     $create_post_query = mysqli_query($connection, $query);
     
     if (!$create_post_query) {
      die('QUERY FAILED' . mysqli_error($connection));
    }
 
    }
?>
    <form action="" method="POST" enctype="multipart/form-data">
           
       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Post Title</label>
         <input type="text" class="form-control" id="exampleInput1" name="post_title">
         <span class="bmd-help">Type Post Title</span>
       </div>

       <div class="form-group">
         <select name="post_category" id="post_category"  class="form-control selectpicker" data-style="btn btn-link" >
    
            <?php
            $query = "SELECT * FROM categories";
            $select_categories_id = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($select_categories_id)) {

            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            echo "<option value='$cat_id'>{$cat_title}</option>";
            }

            ?>
    
    </select>
       </div>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Post Author</label>
         <input type="text" class="form-control" id="exampleInput1" name="post_author">
         <span class="bmd-help">Post Author</span>
       </div>

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
         <label for="exampleInput1" class="bmd-label-floating">Post Tags</label>
         <input type="text" class="form-control" id="exampleInput1" name="post_tag">
         <span class="bmd-help">Post Tags</span>
       </div><br>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Post Status</label>
         <input type="text" class="form-control" id="exampleInput1" name="post_status">
         <span class="bmd-help">Post Status</span>
       </div><br>
    
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Post Content</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="post_content"></textarea>
     <span class="bmd-help">Your Content here</span>
  </div>

  <div class="form-group">
  <input type="submit" class="btn btn-success" name="create_post" value="Publish Post">
  </div>


           
    </form>
</div>