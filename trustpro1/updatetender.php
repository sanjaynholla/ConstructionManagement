        <?php
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
              $wno=$_POST['workno'];
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
                        $RE=$_POST['radio1'];
                       if($RE=="sanctioned")
                    {
                       
                        $qry= "update trustpro2t set type='$type',cost='$cost',cbs='$cbs',remark='$remark',emd='$emd',securitydep='$securitydep',itax='$itax',royalty='$royalty',nsc='$nsc',salestax='$salestax' where workno='$wno'";
                      
                            $res=  mysql_query($qry,$con); 
                               if($res)
                                  {
                                      echo "<script type='text/javascript'>  alert('TENDER  SANCTIONED !');</script>";
                                   }
                                    else 
                                        {
                                            echo "<script type='text/javascript'> alert(' OPPS!!  TENDER NOT SANCTIONED !')</script>";
                                        }
                                       include("tenderentry.php");
                    }
                    else    if($RE=="applied")
                    {
                              $qry= "update trustpro2t set type='$type',cost='$cost',cbs='$cbs',remark='$remark' where workno='$wno'";
                              $res=  mysql_query($qry,$con);
                                  
                              
                                  if($res)
                                  { 
                                       echo "<script type='text/javascript'> confirm('TENDER APPLIED!!!')</script>";
                                   }
                                    else 
                                        {
                                             echo "<script type='text/javascript'> confirm(' OPPS!! Tender Not Applied !')</script>";
                                        }
                                         include("tenderentry.php");
                     }
                      else {
                          echo "<script type='text/javascript'> alert('plese choose sanction choice CORRECTLY!')</script>";
                          include("tenderentry.php");
                      }
                      
          
          ?>
