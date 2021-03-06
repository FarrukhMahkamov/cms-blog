<div class="col-lg-4">
<div class="blog_right_sidebar">
<aside class="single_sidebar_widget search_widget">

     <form action="../search.php" method="POST">
                 <div class="form-group">
  
                     <div class="input-group mb-3">
                         <input type="text" name="search" class="form-control" placeholder='Search Keyword'
                             onfocus="this.placeholder = ''"
                             onblur="this.placeholder = 'Search Keyword'">
                         <div class="input-group-append">
                             <button class="btn" type="button"><i class="ti-search"></i></button>
                         </div>
                     </div>
                 </div>
                 <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit" name='submit'>Search</button>
    </form>
</aside>


<!-- LOGIN -->
<aside>
<h3 style="margin-left: 130px;">Login</h3>

    <form action="includes/login.php" method="POST">
    <div class="form-group">
       <input type="text" class="form-control" name="user_name" placeholder="User Name"><br>
       <input type="password" class="form-control" name="user_password" id="" placeholder="User Password"><br>
       <button class=" primary-bg text-white w-50 btn_1 boxed-btn "
            type="submit" name='login' style="margin-left: 80px;">Login</button>
      </div>
   </form>
   </aside>



<aside class="single_sidebar_widget post_category_widget">
     <!-- selecting categories  -->
        <?php 
          $query = "SELECT * FROM categories";
           $select_all_categories_query = mysqli_query($connection,$query);
        ?>
     <!-- end of selecting categories  -->

    <h4>Categories</h4>
    <ul class="list cat-list">
        <li>
            <a href="#" class="d-flex">
            

            <!-- displaying categories -->
            <?php 
               while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];
                  echo "<li><a href='category.php?category= $cat_id'>{$cat_title}</a></li>";
               }
            ?>
           <!-- end of displaying categories -->

           </li>
                    
    </a>
        <!-- </li>
        <li>
            <a href="#" class="d-flex">
                <p>Travel news</p>
                <p>(10)</p>
            </a>
        </li>
        <li>
            <a href="#" class="d-flex">
                <p>Modern technology</p>
                <p>(03)</p>
            </a>
        </li>
        <li>
            <a href="#" class="d-flex">
                <p>Product</p>
                <p>(11)</p>
            </a>
        </li>
        <li>
            <a href="#" class="d-flex">
                <p>Inspiration</p>
                <p>21</p>
            </a>
        </li>
        <li>
            <a href="#" class="d-flex">
                <p>Health Care (21)</p>
                <p>09</p>
            </a>
        </li> -->
    </ul>
</aside>

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title">Recent Post</h3>
    <div class="media post_item">
        <img src="img/post/post_1.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>From life was you fish...</h3>
            </a>
            <p>January 12, 2019</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="img/post/post_2.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>The Amazing Hubble</h3>
            </a>
            <p>02 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="img/post/post_3.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Astronomy Or Astrology</h3>
            </a>
            <p>03 Hours ago</p>
        </div>
    </div>
    <div class="media post_item">
        <img src="img/post/post_4.png" alt="post">
        <div class="media-body">
            <a href="single-blog.html">
                <h3>Asteroids telescope</h3>
            </a>
            <p>01 Hours ago</p>
        </div>
    </div>
</aside>
<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title">Tag Clouds</h4>
    <ul class="list">
        <li>
            <a href="#">project</a>
        </li>
        <li>
            <a href="#">love</a>
        </li>
        <li>
            <a href="#">technology</a>
        </li>
        <li>
            <a href="#">travel</a>
        </li>
        <li>
            <a href="#">restaurant</a>
        </li>
        <li>
            <a href="#">life style</a>
        </li>
        <li>
            <a href="#">design</a>
        </li>
        <li>
            <a href="#">illustration</a>
        </li>
    </ul>
</aside>


<aside class="single_sidebar_widget instagram_feeds">
    <h4 class="widget_title">Instagram Feeds</h4>
    <ul class="instagram_row flex-wrap">
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_5.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_6.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_7.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_8.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_9.png" alt="">
            </a>
        </li>
        <li>
            <a href="#">
                <img class="img-fluid" src="img/post/post_10.png" alt="">
            </a>
        </li>
    </ul>
</aside>


<aside class="single_sidebar_widget newsletter_widget">
    <h4 class="widget_title">Newsletter</h4>

    <form action="#">
        <div class="form-group">
            <input type="email" class="form-control" onfocus="this.placeholder = ''"
                onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
            type="submit">Subscribe</button>
    </form>
                        </aside>
                    </div>
                </div>
                </div>
        </div>
    </section>