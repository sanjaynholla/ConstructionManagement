<html>
   <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h1><center><font color="blue">TENDER DETAILS</font></center></h1>
    <body forecolor="red" bgcolor="pink">
        <?php
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
              $wno=$_POST['workid'];
              $type=$_POST['wtype'];
               $cost=$_POST['cost'];
             
                     $cbs=$_POST['cbs'];
                     $remark=$_POST['remark'];
                       $emd=0.1*$cost;
                       $securitydep=0.05*$cost;
                        $itax=0.025*$cost;
                         $salestax=0.04*$cost;
                        $nsc=0.02*$cost;
                        $royalty=0.02*$cost;
                    if($_POST['radio1']=="sanctioned")
                    {
                       
                        
                       $qry = "update trustpro2t set type='$type',cost='$cost',cbs='$cbs',remark='$remark',emd='$emd',securitydep='$securitydep',itax='$itax',royalty='$royalty',nsc='$nsc',salestax='$salestax' where workno='$wno'";                          
                           
                           
                            $res=  mysql_query($qry,$con); 
                               if($res)
                                  {
                                      echo "<font color='green'>hurrayy!!!!!!all information uploaded succussfully .</font>";
                                   }
                                    else 
                                        {
                                              echo "oops!!somting went wrong durring process!";
                                        }
                             
                            echo "new";
                                header("refresh:2; url=tenderentry.php");
                    }
                    else if($_POST['radio1']=="applied")
                        
                    {
                         
                          $qry = "update trustpro2t set type='$type',cost='$cost',cbs='$cbs',remark='$remark' where workno='$wno'";
                              $res=  mysql_query($qry,$con);
                                  
                              
                                  if($res)
                                  {
                                      echo "222222222222222hurrayy!!!!!!all information uploaded succussfully uploded succussfully";
                                   }
                                    else 
                                        {
                                              echo("22222222222222222oops!!somting went wrong durring process!");
                                        }
                                        header("refresh:2; url=tenderentry.php");
                     }
                      else {
                          echo "please fill data";
                      }
                      
          
          ?>
    </body>
</html>