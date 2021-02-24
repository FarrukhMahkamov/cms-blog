
<?php
if (isset($_GET['p_id'])) { 
  $the_post_id = $_GET['p_id'];
}
$query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
$select_posts_by_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts_by_id)) {
$post_id = $row['post_id'];
$post_author = $row['post_author'];
$post_title = $row['post_title'];
$post_content = $row['post_content'];
$post_category_id = $row['post_category_id'];
$post_status = $row['post_status'];
$post_image = $row['post_image'];
$post_tags = $row['post_tags'];
$post_comment_count = $row['post_comment_count'];
$post_date = $row['post_date'];
}

if (isset($_POST['update_post'])) {
  $post_author = $_POST['post_author'];
  $post_title = $_POST['post_title'];
  $post_content = $_POST['post_content'];
  $post_category_id = $_POST['post_category'];
  $post_status = $_POST['post_status'];
  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];
  $post_tags = $_POST['post_tags'];

  move_uploaded_file($post_image_temp, "../img/blog/$post_image");

  $query = "
UPDATE posts 
   SET post_title = '$post_title'
     , post_category_id = '$post_category_id'
     , post_date = now()
     , post_author = '$post_author'
     , post_status = '$post_status'
     , post_tags = '$post_tags'
     , post_content = '$post_content'
     , post_image = '$post_image'
 WHERE post_id = $the_post_id;
";
 
 
  $update_post = mysqli_query($connection, $query);
 
  if (!$update_post) {
    die('QUERY FAILED' . mysqli_error($connection));
  }
  
}
?>
<div class="row">
<div class="col-lg-8">
<form action="" method="POST" enctype="multipart/form-data">
           
 <div class="form-group">
   <label for="exampleInput1" class="bmd-label-floating">Post Title</label>
   <input type="text" class="form-control" id="exampleInput1" value="<?php echo $post_title; ?>" name="post_title">
   <span class="bmd-help">Type Post Title</span>
 </div><br>

 <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
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
  <input type="text" value="<?php echo $post_author; ?>" class="form-control" id="exampleInput1" name="post_author">
  <span class="bmd-help">Post Author</span>
</div>



<div class="form-group">
<div class="fileinput fileinput-new text-center" data-provides="fileinput">
    <div class="fileinput-new thumbnail img-raised">
        <img src="../img/blog/<?php echo $post_image; ?>" alt="...">
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
         <input type="text" value="<?php echo $post_tags; ?>" class="form-control" id="exampleInput1" name="post_tags">
         <span class="bmd-help">Post Tags</span>
       </div><br>

       <div class="form-group">
         <label for="exampleInput1" class="bmd-label-floating">Post Status</label>
         <input value="<?php echo $post_status; ?>" type="text" class="form-control" id="exampleInput1" name="post_status">
         <span class="bmd-help">Post Status</span>
       </div><br>
    
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Post Content</label>
     <textarea value="" class="form-control" id="exampleFormControlTextarea1" rows="3" name="post_content"><?php echo $post_content; ?></textarea>
     <span class="bmd-help">Your Content here</span>
  </div>


  

  <div class="form-group">
  <input type="submit" class="btn btn-success" name="update_post" value="Edit Post">
  </div>


           
    </form>
</div>
</div>