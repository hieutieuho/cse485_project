<?php
	session_start();
	if(isset($_SESSION['u_name'])){
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/Admin-form.css">
    <script src="https://use.fontawesome.com/484df5253e.js"></script>
</head>
<body>
	<?php
		include_once 'adnav.php';
	?>
    <section>
        <div class="sec_div1">
            <div id="adminInfo" style="background-color:#2196f3">
                <p>Lượt truy cập</p>
            </div>
            <div id="adminInfo" style="background-color:#009688">
                <p>Tin nhắn</p>
            </div>
            <div id="adminInfo" style="background-color:#ff9800">
                <p>Thông báo</p>
            </div>
        </div>
        <div class="big_div">
            <div class="sec_div2">
                <div id="app"></div>
            </div>
            <div class="sec_div3">
                <div>
                    <h1 style="background-color:#ff9800">Thông báo</h1>
                </div>
                <div>
                    <h1 style="background-color:#009688">Tin nhắn</h1>
                </div>
            </div>
        </div>

    </section>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://npmcdn.com/react@15.3.0/dist/react.min.js'></script>
    <script src='https://npmcdn.com/react-dom@15.3.0/dist/react-dom.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
<?php
	} else{
		header('location:/Big_project/Home.php');
	}
?>