<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Diary</title>
        <link rel="stylesheet" type="text/css" href="pass_change_styles.css"/>
    </head>
    <body>
        <div id="wrapper">
        	<form>
        		<div>
        			<label>Email</label>
        			<input type="text" name="email" size="30" />
        		</div>
        		<div>
        			<div>
        				<label>New password</label>
        				<input type="password" name="password" />
        			</div>
        			<div>
        				<label>Re-enter new password</label>
        				<input type="password" name="repassword" />
        			</div>
        		</div>
        		<div>
                    <input class="button" type="submit" value="SUBMIT" />
                    <input class="button" type="button" onclick="location.href='index.php'" value="CANCEL" />
                </div>
        	</form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
