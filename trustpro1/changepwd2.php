<?php
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
            
            $password=$_POST['pass'];
             
              $query="update trustpro1t set  password ='$password' where id=1";
              $res=  mysql_query($query,$con) or die("couldnt select");
                if($res)
        {  ?>        
<html>
    <body><font color="green"><h1>Password has been Successfully Changed... Please  Login with New Password  </h1></font>
     <?php include 'loginform.php'; }  ?>