<?php
 
        echo $pr = $_POST['newproduct'];
        
         define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
            $qry="insert into products(product) values ('$pr')";
     $res=  mysql_query($qry,$con); 
     if($res) {
         echo "ok";
         header("location:inventaryentry.php");
     }
     else { echo "no"; }
   ?>