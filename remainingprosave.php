<?php
            echo"<h1>WAIT YOU WILL BE REDIRECTED IN SOON!!!</h1>";
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           
           $wno=$_POST['workno'] ;
            $product1= $_POST['product1'];
           $unit1=$_POST['unit1'];
           $product2=$_POST['product2'];
           $unit2=$_POST['unit2'];
            $product3=$_POST['product3'];       
             $unit3=$_POST['unit3']; 
             $quantity1=$_POST['quantity1'];
             $quantity2=$_POST['quantity2'];
             $quantity3=$_POST['quantity3'];
           
               $qry1=  mysql_query("select * from trustpro2t where workno='$wno'") or die("could'nt select");
             $info1=  mysql_fetch_array($qry1);
              $price1=$info1[13];
             $price2=$info1[18];
             $price3=$info1[22];
             $inventarytotal=$info1[28];
             
             $total=$price1*$quantity1+$price2*$quantity2+$price3*$quantity3;
             $balance=$inventarytotal-$total;
     $qry= "insert into remainings values('$wno','$product1','$unit1','$price1','$product2','$unit2','$price2','$product3','$unit3','$price3','$quantity1','$quantity2','$quantity3','$total','$balance')";
      $res=  mysql_query($qry,$con);
                                  
                              
                                  if($res)
                                  { 
                                      echo "<script type='text/javascript'>alert('PROCESS GETS CORRECT!')</script>";
                                      header("refresh:1; url=remainingpro.php");
                                  
                                   }
                                    else 
                                        {
                                         echo "<script type='text/javascript'> alert('all records  not updated!'); </script>";
                                            header("refresh:1; url=remainingpro.php"); 
                                        }
   
?>


