<?php
    include_once 'headerform.php';
?>
 <section>
            <h3>Sinh viên nộp bài tập </h3>
            <br />
            <label for="SVname"><b>Họ tên sinh viên</b></label>
            <input type="text" placeholder="Họ tên" name="SVname" required></input>
            <br />
            <br />
            <label for="phone"><b>Phone number</b></label>
            <input type="text" placeholder="Enter Phone number" name="phone" required>
            <br />
            <br />
            <label for="email"><b>email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            <br />
            <br />
			<input type="file" id="myFile">
            <div class="clearfix">
                <button type="submit" style="width:50%" class="signupbtn">Submit</button>
            </div>
    </section>
<?php
    include_once 'footerform.php';
?>