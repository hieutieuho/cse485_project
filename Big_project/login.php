<?php

	session_start();

	if(isset($_POST['uname']) && isset($_POST['psw'])){
		
		include_once'dbconn.php';

		$uname = mysqli_real_escape_string($conn, $_POST['uname']);
		$psw = mysqli_real_escape_string($conn, $_POST['psw']);
		
		
		if(empty($uname) || empty($psw)){
			header("location:Home.php?login=empty");
			exit();
		} else{
			$sql="select * from userinfo where user_name like '$uname';";
			$result = mysqli_query($conn,$sql);
			$resultcheck = mysqli_num_rows($result);
			if($resultcheck < 1){
				echo "	<script>
							alert('Login failed ! Your username didn't exist');
							window.location.href='Home.php';
						</script>";
				exit();
			} else {
				if($row =  mysqli_fetch_assoc($result)){
					$hashedPwdCheck = password_verify($psw,$row['user_pass']);
					if($hashedPwdCheck == true){
						$_SESSION['u_name'] = $uname;
						header("location:/Big_project/Admin.php");
						exit();
					} else{
						echo "	<script>
									alert('Login failed ! Your acount or password are wrong');
									window.location.href='Home.php';
								</script>";
						exit();
					}
				}
			}
		}
	} else {
			header("location:Home.php?login=error");
			exit();
	}
?>