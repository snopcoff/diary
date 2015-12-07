<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Main Page</title>
        <link rel="stylesheet" type="text/css" href="user_style.css" />
    </head>
    <body>      
        <div id="navbar" >
            <ul class="navbar">
                <li class="logo"><input class="button" type="button" onclick="location.href='main_page.php'" /></li>
                <li class="search">
                    <form action="search.php" method="GET" name="search">
                      <input type="text" name="search2" size="50" />
                      <input class="sbutton" type="submit" value="SEARCH" />
                    </form>
                </li>
            </ul>
        </div>
        <div id="themiddle">
            <div class="title_name"></div>
            <div class="main_setting">
            	<ul class="inner_setting">
                    <li class="post_setting">
                        This is to post post;
                    </li>
                    <li class="side_setting">
                        <div class="avatar">
                            <img class="ava_img" src="avatar/ava.jpg" alt="avatar not found" />
                            <h3>User name</h5>
                        </div>
                        <div class="friend_list">
                            <a href="#">Friend name</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>