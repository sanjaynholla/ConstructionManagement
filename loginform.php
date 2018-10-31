<?php
    if(@ isset($_COOKIE['login'][name]) && @isset($_COOKIE['login'][password]))
    {
       header("location:http://localhost/trustpro1/tenderentry.php");
    }
?>
<html>
    <head>
        <title>Welcome to Login Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
    body{
            padding:7;
            margin:20px ;
            text-align:center;
            background: url("apache_pb.png") repeat-x ;
           
           
        }  
        #hh {
            align: bottom;
        }
        #last {
            margin-top: 570px;
            margin-left: 100px;
            position: absolute;
        }
</style>
</head>
<body bgcolor="" >
    <img src="11880576_943910388999262_4747264390079301386_n.jpg" align="left" height="80%" width="30%" onmouseover="this.src='10983353_940914372609988_2965449498374774598_n.jpg'" onmouseout="this.src='11880576_943910388999262_4747264390079301386_n.jpg'">

<center>
</center>
</header>
        
    <div id="main">
<div id="login">
    <center><h2><font color="green"> Login Form</h2> </font></center>
<form action="athenticate.php" method="post">

    <label><font color="red">UserName :</font></label>
    <input id="name1" name="user" placeholder="username" type="text" >
<label><font color="dark">Password :</font></label>
<input id="password1" name="pass" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
REMEMBER ME
<input type="checkbox" name="chkrem" value="remember">
</form>
    <form action="changepwd.php" method="post"><input name="submit" type="submit" value="Change password "></form>
</div>
</div>


<script type="text/javascript" src="jque1ver/jqry1ver.js"></script>
<script type="text/javascript" src="cssfocus.js"></script>
</body>
</html>
    