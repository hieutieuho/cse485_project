<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/Admin-form.css">
    <title></title>
<style>
#nop {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

    #nop div {
        width: 80%;
        height: 150px;
        margin: 20px;
        border-radius: 25px;
        background-color: #dbd979;
        text-align: center;
    }
</style>
</head>
<body>
    <?php
        include_once 'adnav.php';
    ?>
<section id="nop">
	<div>
		<h1>Sinh viên A</h1>
	</div>
	<div>
		<h1>Sinh viên B</h1>
	</div>
	<div>
		<h1>Sinh viên C</h1>
	</div>
</section>
</body>
</html>