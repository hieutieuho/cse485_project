<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Admin-form.css">
    <title></title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
       
        #left {
            width: 30%;
            background-color:white;
            height:670px;
            text-align:center;
            float:left;
            display:flex;
            flex-direction:column;
            justify-content:space-around;
            align-items:center;
        }
            #left h1{
                width:auto;
                margin:0;
            }
        #right{
            width:70%;
            height:auto;
            text-align:center;
            float:left;
            background-color:aliceblue;
        }
            #right h1{margin:0;}
            #right h3 {
                margin: 5px 0px;
                padding:5px;
                width: 100%;
                background-color: #bdc5cc
            }
        #preview {
            width: 90%;
            height: 90%;
            background-color: lightgreen;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
            #preview img {
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
                background-color: #5dbb61;
            }
            label{
                display:block;
            }
        input, textarea {
            width: 80%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

            input:focus {
                background-color: #ddd;
                outline: none;
            }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

            button:hover {
                opacity: 1;
            }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            width: 40%;
        }
    </style>
</head>
<body>
    <?php
		include_once 'adnav.php';
	?>
    <section>
        <div id="left">
            <h1>Preview</h1>
            <div id="preview">
                <img src="img_avatar.png" />
                <div id="Userinfo">
                    <h2>Tiểu sử</h2>
                </div>
                <div id="Userinfo">
                    <h2>Liên lạc</h2>
                </div>
            </div>            
        </div>
        <div id="right">
			<form action="edit_profile.php" method="POST">
				<h1>Admin info</h1>
				<br />
				<br />
				<label for="fname"><b>Full name</b></label>
				<input type="text" placeholder="Enter your full name" name="fname" multiple required>
				<h3>Tiểu sử</h3>
				<br />
				<label for="Bio"><b>Bio</b></label>
				<textarea type="text" placeholder="Tiểu sử" name="Bio" style="height:150px" multiple required></textarea>
				<br />
				<br />
				<h3>Thông tin liên lạc</h3>
				<br />
				<br />
				<label for="phone"><b>Phone number</b></label>
				<input type="text" placeholder="Enter phone number" name="phone" multiple required>
				<br />
				<br />
				<label for="Address"><b>Address</b></label>
				<input type="text" placeholder="Enter Address" name="address" multiple required>
				<br />
				<br />
				<div class="clearfix">
					<button type="submit" name="submit" class="signupbtn">Submit</button>
				</div>
			</form>
        </div>
    </section>
</body>
</html>