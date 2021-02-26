

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
            if (isset($_GET['category'])) {
                $post_category_id = $_GET['category'];
            }
            $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id";
            $select_all_posts_query = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($select_all_posts_query)) {
            $post_id = $row['post_id'];
            $post_image = $row['post_image'];
            $post_date = $row['post_date'];
            $post_title = $row['post_title'];
            $post_content = substr($row['post_content'],0,100);
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
   <div class="test"></div>
           </article>
    <?php }?>
                      
                        
    <nav class="blog-pagination justify-content-center d-flex">
        <ul class="pagination">
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link">1</a>
            </li>
            <li class="page-item active">
                <a href="#" class="page-link">2</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
</div>
<?php 
    include "includes/sidebar.php";
?>
<?php 
    include "includes/footer.php";
?>
    <!--================Blog Area =================-->
