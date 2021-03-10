<?php ob_start(); ?>
<?php include "db.php" ?>

<?php 
   if (isset($_POST['login'])) {
	    $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];

		$user_name = mysqli_real_escape_string($connection, $user_name);
		$user_password = mysqli_real_escape_string($connection, $user_password);
		
		$query = "SELECT * FROM users WHERE user_name = '{$user_name}' ";

		$select_users_query = mysqli_query($connection, $query);
		if (!$select_users_query) {
			
			
		}

		while ($row = mysqli_fetch_array($select_users_query)) {
			
			 $db_user_id = $row['user_id'];
			 $db_user_name = $row['user_name'];
			 $db_user_password = $row['user_password'];
			 $db_user_first_name = $row['user_firstname'];
			 $db_user_lastname = $row['user_lastname'];
			 $db_user_role = $row['user_role'];
		}
		if ($user_name !== $db_user_name && $user_password !== $db_user_password)  {
			header("Location : ../index.php ")
		}elseif ($user_name == $db_user_name && $user_password == $db_user_password) {
			
		}

   }

?>