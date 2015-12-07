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
        <link rel="stylesheet" type="text/css" href="main_page_style.css" />
    </head>
    <body>      
        <div id="navbar" >
            <ul>
                <li class="logo"><input class="button" type="button" onclick="location.href='main_page.php'" /></li>
                <li class="search">
                    <form action="search.php" method="GET" name="search">
                      <input type="text" name="search2" size="50" />
                      <input class="sbutton" type="submit" value="SEARCH" />
                    </form>
                </li>
                <li class="the_user">
                	<input class="ubutton" type="button" onClick="location.href='userview.php'" style="background-image:url('avatar/ava.jpg');" />
                </li>
            </ul>
        </div>
        <div id="themiddle">
            <div class="content_post">
                <p>This is the post
                s;fjsldfj;asljf;slkdfj
                dfslkafjds;lf;sldjf
                sdflksdf;sadjflsdkjf;lsdf
                asfds;dfj</p>
                <p>;jksdf;lsadjf;lasdjfkdsf
                dfla;sdflsdfjk;laskjfa
                fdsdlkfj;saljfs;ldjkf;af
                sadflk;asfj</p>
            </div>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>
