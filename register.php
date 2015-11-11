<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng ký</title>
        <link rel="stylesheet" type="text/css" href="register_style.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="top">
                
            </div>
            <div id="middle">
                <div class="reg_form">
                    <form action="finish.php" method="POST">
                        <div>
                            <label for="username">User name</label>
                            <input id="username" type="text" name="username" size="25" />
                        </div>
                        <hr/>
                        <div class="ex_div">
                            <div>
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" />
                            </div>
                            <div>
                                <label for="repassword">Re-enter password</label>
                                <input id="repassword" type="password" name="repassword"/>
                            </div>
                        </div>                        
                        <hr/>
                        <div>
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" size="30" />
                        </div>
                        <div>
                            <input class="button" type="submit" value="SUBMIT" />
                            <input class="button" type="button" onclick="location.href='index.php'" value="CANCEL" />
                        </div>
                    </form>
                </div>
            </div>
            <div id="bottom">
                
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
