<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Admin-form.css">
    <title>khóa học</title>
    <style>
	textarea, input {
    width: 95%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
textarea:focus, input:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 0px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}


/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
		section{
			height:auto;
		}
		#LTs {
			background-color:#03a9f4;
			color:white;
			font-weight:bold;
			font-size:30px;
			text-align:center;
			width:100%;
			overflow-x:hidden;
		}
        #left{
            width:30%;
            height:650px;
            background-color:lemonchiffon;
            float:left;
            overflow-x:hidden;
			border:0px
        }
            #left div {
                height: 100px;
                width: 100%;
                border-width: 0px 0px 2px 0px;
                border-style: solid;
                border-color: #939393;
            }
			#left div:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}

                #left div p,h1,h3 {
                    margin: 0px 16px;
                }
        #right{
            width:70%;
            height:570px;
            background-color:white;
            float:left;
            overflow-x:hidden;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <?php
		include_once 'adnav.php';
	?>
    <section>
		<div id="LTs">
			<p>KHÓA HỌC</p>
		</div>
        <div id="left">
            <div>
                <button style="width:100%;height:100%;color:black;background-color:lemonchiffon"><b>Khóa học 1<b></button>
            </div>
            <div>
                <button style="width:100%;height:100%;color:black;background-color:lemonchiffon"><b>Khóa học 2<b></button>
            </div>
            <div>
                <button style="width:100%;height:100%;color:black;background-color:lemonchiffon"><b>Khóa học 3<b></button>
            </div>
            <div>
				<button onclick="document.getElementById('id01').style.display='block'" style="width:100%;height:100%;color:black;"><b>Thêm khóa học<b></button>
            </div>         
        </div>
        <div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Thêm khóa học</h1>
      <hr>
	  <label for="StartDate"><b>Thời gian bắt đầu khóa học</b></label>
	  <input type="date" name="StartDate" required>

	  <label for="EndDate"><b>Thời gian kết thúc khóa học</b></label>
	  <input type="date" name="EndDate" required>

      <label for="Giới thiệu"><b>Giới thiệu khóa học</b></label>
      <textarea placeholder="Nhập giới thiệu" name="Giới thiệu" required></textarea>

      <label for="NDung"><b>Nội dung khóa học</b></label>
      <textarea placeholder="Nhập nội dung" name="NDung" required></textarea>

      <label for="BGiang"><b>File bài giảng</b></label>
      <input type="file" name="BGiang" required>
      
      <div class="clearfix">
        <button type="submit" class="signupbtn">Thêm khóa học</button>
      </div>
    </div>
  </form>
</div>
		<div id="right">
            <h1 style="text-align:center">Tên khóa học</h1>
            <h3>Tgian bắt đầu khóa học</h3>
            <br />
            <br />
            <br />
            <br />
            <br />
			<h3>Giới thiệu khóa học</h3>
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
	<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>