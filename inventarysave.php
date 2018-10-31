<?php
            echo"<h1>WAIT YOU WILL BE REDIRECTED SOON </h1>";
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
      
            $workno=$_POST['workno'];
         
            $type1=$_POST['producttype1'];
            $quantity1=$_POST['quantity1'];
            $unit1=$_POST['unit1'];
            $price1=$_POST['price1'];
            
             $type2=$_POST['producttype2'];
            $quantity2=$_POST['quantity2'];
            $unit2=$_POST['unit2'];
            $price2=$_POST['price2'];
           
             $type3=$_POST['producttype3'];
            $quantity3=$_POST['quantity3'];
            $unit3=$_POST['unit3'];
            $price3=$_POST['price3'];
          
            $to1=$quantity1*$price1;
            $to2=$quantity2*$price2;
            $to3=$quantity3*$price3;
            $inventarycost=$to1+$to2+$to3;
            $qry="update trustpro2t set producttype1='$type1',quantity1='$quantity1',unit1='$unit1',price1='$price1',producttype2='$type2',quantity2='$quantity2',unit2='$unit2',price2='$price2',producttype3='$type3',quantity3='$quantity3',unit3='$unit3',price3='$price3',inventarycost='$inventarycost' where workno='$workno'";                                  
               $res=  mysql_query($qry,$con);                
                                  if($res)
                                  { 
                                      echo "<script type='text/javascript'>alert(' ITEMS ARE ADED SUCCUSSFULLY!')</script>";
                                      header("refresh:1; url=inventaryentry.php");
                                   }
                                    else 
                                        {
                                             echo "<script type='text/javascript'> alert(' ITEMS ARE FAILED TO ADD  !')</script>";
                                              header("refresh:1; url=inventaryentry.php");
                                        }
?>
