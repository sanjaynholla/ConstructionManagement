<?php
        define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
            $wno=$_POST['wno'];
            $data=  mysql_query("select * from trustpro2t where workno='$wno'") or die("could'nt select");
            if(mysql_num_rows($data))
             {
                 mysql_query("delete from trustpro2t where workno='$wno'") or die("could'nt select"); 
                 mysql_query("delete from vehicle where workno='$wno'") or die("could'nt select"); 
              echo "<script type='text/javascript'>alert('RECORDS DELETED CORRECTLY!')</script>";
               echo"<h1> Please Wait....you will be redirected In Soon</h1>";
                                      header("refresh:1; url=tenderwrkreport.php");
             }
           else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";
        echo"<h1> Please Wait....you will be redirected In Soon</h1>";
                 header("refresh:1; url=tenderwrkreport.php");
 }
?>