<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
              $name=$_POST['user'];
              $password=$_POST['pass'];
              $query="SELECT * FROM trustpro1t WHERE name=\"$name\" AND password=\"$password\"";
              $res=  mysql_query($query,$con) or die("couldnt select");
              $rows=  mysql_numrows($res);
        if($rows==1)
        {          
           if($_POST['chkrem']=="remember")
           {
              setcookie("login[name]",$name,time()+36000);
              setcookie("login[password]",$password,time()+36000);
              
           }
            header("location:http://localhost/trustpro1/tenderentry.php");
        }
         else
        {
             
             echo "LOGIN FAILED!!! DOUBLE CHECK YOUR USERNAME AND PASSWORD AND TRY AGAIN";
        }
        ?>
       
    </body>
</html>

