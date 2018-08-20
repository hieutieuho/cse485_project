<?php
	if(isset($_POST['submit'])){
	
		include_once'dbconn.php';

		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$bio = mysqli_real_escape_string($conn,$_POST['Bio']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		$address = mysqli_real_escape_string($conn,$_POST['address']);
		$id=1;

		if(empty($fname) || empty($bio) || empty($phone)){
			header("location: /Big_project/user_profile.php?fields=empty");
			exit();
		} else {
			$sql="SELECT * FROM user_profile where id='$id';";
			$result = mysqli_query($conn,$sql);
			$resultcheck = mysqli_num_rows($result);

			if($resultcheck < 1){
				$sql = "insert into user_profile(id,user_fname,user_bio,user_phone,user_address) values ('$id','$fname','$bio','$phone','$address');";
				$result = mysqli_query($conn,$sql);
				header("location: /Big_project/user_profile.php?profile_update_success.");
			} else{
				mysqli_query("update user_profile set user_bio='$bio',user_phone='$phone' where id=$id");
				header("location: /Big_project/user_profile.php?profile_update_suck.");
			}
		}
	}else{
        header("location:/Big_project/user_profile.php?failed_to_update_profile.");
        exit();
    }
?>