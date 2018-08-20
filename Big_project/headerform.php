
	<!DOCTYPE html>
	<html>
	<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/myform.css">
	<style>
        
        section {
            padding: 16px;
            background-color: antiquewhite;
            overflow: hidden;
        }
		#HN {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
}
			#HN div {
				width:80%;
				height:150px;
				margin:20px;
				border-radius:25px;
				background-color:#dbd979;
				text-align:center;
			}
        #left {
            width: 25%;
            height: 700px;
            background-color: lemonchiffon;
            float: left;
            display: flex;
            flex-direction: column;
            align-items: center;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

            #left img {
                width: 200px;
                height: 200px;
                border-radius: 50%;
                margin: 16px;
            }

        #Userinfo {
            width: 100%;
            height: 30%;
            text-align: center;
        }

            #Userinfo h2 {
                background-color: #fbf3a7;
            }

        #right {
            width: 75%;
            height: 1000px;
            float: left;
        }
			#right_div{
				width:100%;
				height:50%;
				display:flex;
				justify-content:space-around;
			}

            #right_div div {
                width: 45%;
                height: 90%;
                float: left;
                text-align: center;
                color: white;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

                #right_div div p {
                    margin: 0px;
                    padding: 0px;
					font-size: 30px;
					font-weight:bold;
                }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            width:auto;
        }

        footer {
            width: 100%;
            height: 100px;
            overflow: hidden;
            background-color: #2d2d30;
        }

        
    </style>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

</head>
<body>
    <nav id="navbar">
        <a href="Home.php">Trang Chủ</a>
        <a href="javascript:void(0)">Bài Giảng</a>
        <a href="javascript:void(0)">Thông báo</a>
        <a href="javascript:void(0)">Sinh viên nộp bài tập</a>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;float:right;margin:0">Login</button>
        <img src="img_avatar.png" style="float:right" />
    </nav>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="login.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img_avatar.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href="Register.php" class="cancelbtn">Register</a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
	