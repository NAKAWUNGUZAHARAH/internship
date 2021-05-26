 <?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysqli_connect('localhost','root',"",'results');
	if(!$link) {
		die('Failed to connect to server: ' . mysqli_error());
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	// input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysqli_query($link,$qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);

		   $_SESSION['ID'] = $member['ID'];
			$_SESSION['USERNAME'] = $member['username'];
			$_SESSION['LASTNAME'] = $member['lastname'];
			$_SESSION['ROLE'] = $member['Role'];
		// 	$_SESSION['SESS_PRO_PIC'] = $member['profImage'];

			header("location: dashboard.php");
			exit();
			session_write_close();
		} else {
			//Login failed
			header("Location: index.php");
			exit();
			
		}
	}else {
		die("Query failed");
	}
?>