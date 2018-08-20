<?php
    if(isset($_POST['submit'])){

       include_once'dbconn.php';
    
        $uname = mysqli_real_escape_string($conn,$_POST['uname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $psw = mysqli_real_escape_string($conn,$_POST['psw']);

        //Error handlers
        //check for empty fields
        if(empty($uname) || empty($email) || empty($psw)){
            header("location: /Big_project/Register.php?signup=empty");
            exit();
        } else {
            //check if email characters are valid
            if($_POST['psw']==$_POST['psw-repeat']){
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("location: /Big_project/Register.php?signup=invalidemail");
                    exit();
                } else {
                    $sql = "SELECT * FROM userinfo where user_name='$uname';";
                    $result = mysqli_query($conn,$sql);
                    $resultcheck = mysqli_num_rows($result );

                    if($resultcheck > 0){
						echo "	<script>
									alert('Tên username đã tồn tại vui lòng tạo mới.');
									window.location.href='Register.php';
								</script>";
                        exit();
                    } else {
                        $hashedPWD = password_hash($psw, PASSWORD_DEFAULT);
                        $sql = "insert into userinfo(user_name,user_email,user_pass) values ('$uname','$email','$hashedPWD');";
                        $result = mysqli_query($conn,$sql);
						echo "	<script>
									alert('Tài khoản của bạn đã được tạo thành công');
									window.location.href='Home.php';
								</script>";
                        exit();
                    }
                }
            } else {
                echo "	<script>
							alert('2 trường mật khẩu k trùng nhau, vui lòng nhập lại.');
							window.location.href='Register.php';
						</script>";
            }            
        }
    }else{
        header("location:signup.php");
        exit();
    }
?>