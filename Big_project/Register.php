﻿<?php
	include_once'headerform.php';
?>
    <section>
        <div id="id02" >
            <form class="modal-content" action="signup.inc.php" method="POST">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
					<label for="username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                    <div class="clearfix">
                        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
<?php
	include_once'footerform.php';
?>
