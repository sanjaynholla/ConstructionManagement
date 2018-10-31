<?php
            echo"<h1>WAIT YOU WILL BE REDIRECTED IN SOON!!!</h1>";
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
           $date=$_POST['date'] ;
            $sitename= $_POST['sitename'];
           $labour=$_POST['labour'];
           $labourno=$_POST['labourno'];
           $workno=$_POST['workno'];
            $labourcost=$_POST['labourcost'];       
            $totallabour=$labourno*$labourcost;       
           
  
     $qry="update trustpro2t set dat='$date',sitena='$sitename',labour='$labour',labourno='$labourno',labourco='$labourcost',totallabour='$totallabour' where workno='$workno'";
      $res=  mysql_query($qry,$con);
                                  
                              
                                  if($res)
                                  { 
                                      echo "<script type='text/javascript'> alert('all records updated!'); </script>";
                                      header("refresh:1; url=labourentry.php"); 
                                   }
                                    else 
                                        {
                                             echo "<script type='text/javascript'> alert(' OPPS!! not update !');</script>";
                                              header("refresh:1; url=labourentry.php");
                                        }
   
?>


