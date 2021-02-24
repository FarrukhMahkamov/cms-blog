<?php ob_start(); ?>
<?php include "includes/admin_header.php" ?>
<?php include "includes/admin_navigation.php" ?>
    <div class="main-panel">
  
      <div class="content">
        <div class="container-fluid">

<div class="row">
<div class="col-lg-4">
<?php addCategory(); ?>
        <form action="" method="POST">
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Add Category</label>
                <input type="text" class="form-control" name="cat_title" id="exampleInput1">
                <span class="bmd-help">Type Category name</span>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Add Category">
             </div>  
        </form>

       <?php 
        if (isset($_GET['edit'])) {
          $cat_id = $_GET['edit'];
          include "includes/update_categories.php";
        }
       ?>        
        <div class="col-lg-8">
        <div class="card-body">
                  <div class="table-responsive">

                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Delete
                        </th>
                        <th>
                          Edit
                        </th>
                        
                      </thead>
                      <tbody>
           <?php displayCategories(); ?>
           <?php deleteCategries(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div>

        








        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
 <?php include "includes/admin_footer.php" ?>