<?php
   function addCategory(){
       global $connection;
    if (isset($_POST['submit'])) {
      $cat_title = $_POST['cat_title'];
       if ($cat_title == "" || empty($cat_title)) {
        echo "  <div class='alert alert-danger'>
        <div class='container'>
          <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
             </div>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'><i class='material-icons'>clear</i></span>
          </button>
          <b></b>This field should not be empty
        </div>
      </div>";
      }else{
        $query = "INSERT INTO categories(cat_title) ";
        $query .= "VALUE ('{$cat_title}') ";
        $create_category_query = mysqli_query($connection, $query);

        if ($create_category_query) {
        echo "  <div class='alert alert-success'>
        <div class='container'>
          <div class='alert-icon'>
            <i class='material-icons'>error_outline</i>
             </div>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'><i class='material-icons'>clear</i></span>
             </button>
          <b>success Alert:</b>Your categorys successfully added!
        </div>
      </div>";
        }if ($create_category_query) {
          header("Location: categories.php");
        }        
             }
           }    
   }


function displayCategories(){
    global $connection;
    //  displaying categories

        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($select_categories)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "<tr>";
        echo "<td>{$cat_id}</td>";
        echo "<td>{$cat_title}</td>";
        echo "<td> <button  class='btn btn-danger  btn-sm'><a style='color: white;' href='categories.php?delete={$cat_id}'>Delete</a></button></td>";
        echo "<td> <button  class='btn btn-warning  btn-sm'><a style='color: white;' href='categories.php?edit={$cat_id}'>Edit</a></button></td>";
        echo "</tr>";
       }
    
//    end of displaying categories
}

function deleteCategries(){
    global $connection;
    //  Deleting categories 
  
     if (isset($_GET['delete'])) {
       $the_cat_id = $_GET['delete'];
       $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
       $delete_query = mysqli_query($connection,$query);
       header("Location: categories.php");
     }

    //   End of Deleteing Cateogires 
}
?>