<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <style>
            input[type=submit]{
	        background:#ee0000;
	        border:1px solid #ee0000;
	        color:#ffffff;
	        height:30px;
	        display:block;
	        margin:10px 0px;
        }
 
input[type=submit]:hover{
	background:#ff5858;
	border:1px solid #ff5858;
	cursor:pointer;
}
            .success-msg{
	        background:#15a869;
	        border:1px solid #15a869;
	        color:#ffffff;
	        width:33%;
            }
        </style>
    </head>

    <body>
    <?php 
	if(isset($successMsg))
	{
		echo "<div class='success-msg'>";
		print_r($successMsg);
		echo "</div>";
	}
    ?>
        <form action="form1.php" method="POST">
            <table class="align">
                <tr>
                <td>First Name</td>
                <td><input type="text" name="text" id="first"  required></td>  
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="text1" id="first"  required></td>  
                </tr>

                <tr>
                    <td>Phone Number</td>
                    <td><input type="number" name="number1" id="first"  required maxlength="10"></td>  
                </tr>

                <tr>
                    <td>Email Address:</td>
                    <td><input type="email" name="email" id="first" required></td>  
                </tr>

                <tr>
                    <td>Message:</td>
                    <td><textarea name="msg" placeholder="Enter your message here..." rows="10" cols="50"></textarea></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

