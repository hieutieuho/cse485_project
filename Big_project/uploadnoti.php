<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Admin-form.css">
    <title></title>
    <style>
        #LTs {
            background-color: #03a9f4;
            color: white;
            font-weight: bold;
            font-size:30px;
            text-align: center;
            width: 100%;
            height:50px;
            overflow-x: hidden;
        }     
        #LTs p{
            margin:0px;
        }
		input, textarea {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    margin:0px 20px;
}
section h3, section label {
        margin:0px 20px;
    }
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    margin: 0px 20px;
}
    </style>
</head>
<body>
    <?php
        include_once'adnav.php';
    ?>
    <section>
        <div id="LTs">
            <p>Thông báo</p>
        </div>
        <br />
        <label for="SVname"><b>Nhập thông báo</b></label>
        <textarea type="text" placeholder="Họ tên" name="SVname" style="height:150px;" required></textarea>
        <br />
        <br />
        <input type="file" id="myFile">
        <div class="clearfix">
            <button type="submit" style="width:50%" class="signupbtn">Submit</button>
        </div>
    </section>
</body>
</html>