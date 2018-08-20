<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/myform.css">
    <title>Bài Giảng</title>
    <style>
	#LTs {
			background-color:#03a9f4;
			color:white;
			font-weight:bold;
			text-align:center;
			width:100%;
			overflow-x:hidden;
		}
        #left{
            width:30%;
            height:625px;
            float:left;
            top:40;
            left:0;
			overflow-x:hidden;
            position:fixed;
            background-color:lemonchiffon;
        }
            #left div {
                height: 100px;
                width: 100%;
                border-width: 0px 0px 2px 0px;
                border-style: solid;
                border-color: #939393;
            }
				#left div p{
					margin:0;
				}
        #right{
            width:70%;
            height:625px;
            float:left;
            top:40;
            right:0;
            position:fixed;
            overflow-x:hidden;
        }
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <nav id="navbar">
        <a href="C:/xampp/htdocs/Big_project/Home.php">Trang Chủ</a>
        <a href="javascript:void(0)">Bài Giảng</a>
        <a href="javascript:void(0)">Thông báo</a>
        <a href="javascript:void(0)">Bài tập</a>
        <a href="javascript:void(0)">Sinh viên nộp bài tập</a>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;float:right;margin:0">Login</button>
        <img src="img_avatar.png" style="float:right" />
    </nav>
    <div id="id01" class="modal">

        <form class="modal-content animate" action="try.php">
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
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <a href="Register.php" class="cancelbtn">Register</a>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    <section>
		<div id="LTs">
			<p>Bài giảng</p>
		</div>
        <div id="left">
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>
            <div>
                <p>Bài giảng</p>
            </div>

            <div>
                <p>Bài giảng</p>
            </div>
        </div>
        <div id="right">
            <h1>Tên bài giảng</h1>
            <h3>Giới thiệu bài giảng</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
            <h3>Nội dung</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
            <h3>Cách chấm điểm</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
            <h3>Slide bài giảng</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
    </section>
</body>
</html>