

<?php 
  include "includes/db.php";
  include "includes/header.php";
  include "includes/navigation.php";
?>
    <section class="blog_area section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        <article class="blog_item">
            
            <?php 
            if (isset($_GET['p_id'])) {
                $the_post_id = $_GET['p_id'];
            }
            $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
            $select_all_posts_query = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_all_posts_query)) {

            $post_image = $row['post_image'];
            $post_date = $row['post_date'];
            $post_title = $row['post_title'];
            $post_content = $row['post_content'];
            $post_author = $row['post_author'];
            $post_comment_count = $row['post_comment_count'];
            $post_tags = $row['post_tags'];
            ?>
            <div class="blog_item_img">
            <img class="card-img rounded-0" src="img/blog/<?php echo $post_image; ?>" alt="">
                <a href="#" class="blog_item_date">
                  <h3><?php echo $post_date; ?></h3>
                 
           </a>
           </div>

             <div class="blog_details">
                 <a class="d-inline-block" href="post.php?p_id=<?php echo $post_id; ?>">
                     <h2><?php echo $post_title; ?></h2>
                 </a>
                 <p><?php echo $post_content; ?></p>
                 <ul class="blog-info-link">
                     <li><a href="#"><i class="fa fa-user"></i><?php echo $post_author; ?></a></li>
                     <li><a href="#"><i class="fa fa-comments"></i><?php echo $post_comment_count; ?> Comments</a></li>
                     <li><a href="#"><i class="fa fa-tags"></i><?php echo $post_tags; ?></a></li>
                </ul>
             </div>
   
           </article>
    <?php }?>

    <!--  Comments section  --> 
    
     


    
                 


  <div class="comments-area">
                  <h4>Comments</h4>  
                  
    
   
<div class="comment-list">
   <?php
   $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
   $query .= "AND comment_status = 'approved'";
   $query .= "ORDER BY comment_id DESC ";
   $select_comment_query = mysqli_query($connection, $query);
   if (!$select_comment_query) {
      die('QUERY FAILED' . mysqli_query($connection));
   }
   while ($row = mysqli_fetch_array($select_comment_query)) {
      $comment_date = $row['comment_date'];   
      $comment_content = $row['comment_content'];
      $comment_author = $row['comment_author'];
    ?>
     <div class="single-comment justify-content-between d-flex">
         <div class="user justify-content-between d-flex">
       
          <div class="thumb">
                   <img src="../img/comment/comment_1.png" alt="">
                     </div>
                     <div class="desc">
                       <p class="comment">
                          <?php echo $comment_content; ?>
                        </p>
                        <div class="d-flex justify-content-between">
                          <div class="d-flex align-items-center">
                            <h5>
                            <i class="fa fa-user"><?php echo $comment_author; ?></i>
                            </h5>
                            <p class="date"><?php echo $comment_date; ?> </p>
                         </div>
                         <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                   </div>
      
           
                </div>       
             </div>
          </div>
          <?php }?>
       </div>


  </div>
               <!-- End of comments section  -->

               <!-- Comment forms  -->
               
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="" method="POST" id="commentForm">
                  <?php
                   if (isset($_POST['create_comment'])) {
                     $the_post_id = $_GET['p_id'];

                     $comment_content = $_POST['comment_content'];
                     $comment_author = $_POST['comment_author'];
                     $comment_email = $_POST['comment_email'];

                     $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
                     $query .= "VALUES ($the_post_id ,'{$comment_author}', '{$comment_email}', '{$comment_content}', 'unupproved' , now()) ";
                     $create_comment_query = mysqli_query($connection, $query);
                     
                     if (!$create_comment_query) {
                        die('QUERY FAILED' . mysqli_error($connection));
                     }

                     $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                     $query .= "WHERE post_id = $the_post_id ";
                     $update_comment_count = mysqli_query($connection,$query);
                   }
               ?>  
                  <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment_content" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="comment_author" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="comment_email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                      
                     </div>
                     <div class="form-group">
                        <button name="create_comment" type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div> 
     <!-- End of  comment forms  -->     
                        
    
</div>
</div>
<?php 
    include "includes/sidebar.php";
?>
<?php 
    include "includes/footer.php";
?>
    <!--================Blog Area =================-->
