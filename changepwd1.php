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
        {  ?>        
<html>
    <body><h1>Correct password </h1>
        <form method="post" action="changepwd2.php">
            Enter New Password
            <input type="text" placeholder="new password" name="pass">
            <input type="submit" value="change my password">
        </form>
    </body>
</html>
      <?php  }
           else
        {
             
             echo "YOUR ATTEMPT TO LOGIN HAS FAILED";
        }
        ?>