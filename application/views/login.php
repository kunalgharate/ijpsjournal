<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body class="body">
<div class="login">
    <div class="container" align="center" margin="auto"> 
		<h1>LOG IN</h1>
        <?php echo form_open('admin/login'); ?>
		<div class="form-group">
            <table width="auto" hight="auto" align-item="center" border=0 >
                <br>
            <tr><td><input id="username" name="username" type="name" placeholder=" Enter Your Username" REQUIRED class="form-control" ><br></td></tr>
            <tr>
                <td><input id="password" name="password" type="password" placeholder=" Enter Your Password" REQUIRED class="form-control"><br><td>

                </tr>
			<tr>
                <td><input type="submit" name="login" value="LOG IN " class="form-control"/><br></td>
            </tr>
</table>
		</div>

	</div>
    </div>

</body>
</html>