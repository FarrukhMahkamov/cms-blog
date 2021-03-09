<!-- header-start -->
<header>
<div class="header-area ">
<div id="sticky-header" class="main-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-3 col-lg-2">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>
    <div class="col-xl-6 col-lg-7">
            <div class="main-menu  d-none d-lg-block">
                <nav>
                    <ul id="navigation">
                    <?php 
                        $query = "SELECT * FROM categories";
                        $select_all_categories_query = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                           echo "<li class='active' style='color: White;'><a href='category.php?category= $cat_id'>{$cat_title}</a></li>";
                        }
                    ?>
                      <li class="active" style="color: White;"><a href="../admin/index.php">admin</a></li>
                        </ul>   
                </nav>
            </div>
        </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="Appointment">
                            <div class="book_btn d-none d-lg-block">
                                <a  href="#">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>CMS Blog</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->