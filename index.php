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
        <link rel="stylesheet" type="text/css" href="index_styles.css"/>
    </head>
    <body>
        <div id="wrapper">
            <form class="login_form" method="POST">
                <div>
                    <label for="username">User name</label>
                    <input id="username" type="text" name="username" size="25" />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" size="25" />
                </div>
                <a href="pass_change.php">Forgot password</a><br/>
                <input class="button" type="submit" formaction="main_page.php" formmethod="POST" value="LOGIN"/>
                <input class="button" type="button" onclick="location.href='register.php'" value="REGISTER"/><br/>
            </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
