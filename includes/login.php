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
			
			echo $db_id = $row['user_id'];
		}

   }
?>