<?php
    print"<h1>new products aded correctly</h1>";
         $pr = $_POST['newproduct'];
        
         define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
            $qry="insert into products(product) values ('$pr')";
     $res=  mysql_query($qry,$con); 
     if($res) {
     echo "<script type='text/javascript'> alert('all records updated!'); </script>";
                                      header("refresh:1; url=inventaryentry.php"); 
                                   }
     else { echo " no"; }
   ?>