<?php
            echo"<h1>WAIT YOU WILL BE REDIRECTED SOON!!!!!!! </h1>";
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
      
            $workno=$_POST['workno'];
            $date=$_POST['date'];
            $vehicle=$_POST['vehicle'];
            $quantity=$_POST['quantity'];
            $tripsno=$_POST['tripsno'];
            $cost=$_POST['cost'];
            $find=$_POST['find'];
            $total=$cost*$tripsno;
            
            if($find=="i") {
             $qry= "insert into vehicle(workno,date,vehicle,quantity,tripsno,cost,total) values ('$workno','$date','$vehicle',$quantity,'$tripsno','$cost','$total')";
      
             $res=  mysql_query($qry,$con); 
             if($res)
             {
                 echo "<script type='text/javascript'>  alert('VEHICLE DETAILS ARE ADED CLEARLY!');</script>";
                 header("refresh:1; url=vehicledetails.php");
             }
             else 
             {
                echo "<script type='text/javascript'> alert(' OPPS!!   NOT PROCESSED CORRECTLY !')</script>";
               header("refresh:1; url=vehicledetails.php");
                
            } }
            elseif ($find="u") {
             $qry= "update vehicle set date='$date',vehicle='$vehicle',quantity='$quantity',tripsno='$tripsno',cost='$cost',total='$total' where workno='$workno'";
      
             $res=  mysql_query($qry,$con); 
             if($res)
             {
                 echo "<script type='text/javascript'>  alert('VEHICLE DETAILS ARE UPDATED CLEARLY!');</script>";
                 header("refresh:1; url=vehicledetails.php");
             }
             else 
             {
                echo "<script type='text/javascript'> alert(' OPPS!!   NOT UPDATED CORRECTLY !')</script>";
               header("refresh:1; url=vehicledetails.php");
                
            }
}