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
                       print"<table border='1' cellpadding='6' cellspacing='5' bgcolor='green' tablesize=60% fontsize=40px>";
                       
                       print"<h1><font color=red><th>Work no</th><th>Work type</th><th>Tender cost</th><th>Emd</th><th>Security deposit</th><th>Income Tax</th><th>Royalty</th><th>NSC</th><th>SiteName</th><th>Sales Tax</th><th>Remark</th></font></h1>";
                      
                       
                       while($info=  mysql_fetch_array($data))
                       {
                           print"<tr>";
                           print"<td>".$info[0]."</td>";
                           print"<td>".$info[1]."</td>";
                           print"<td>".$info[2]."</td>";
                           print"<td>".$info[3]."</td>";
                           print"<td>".$info[4]."</td>";
                           print"<td>".$info[5]."</td>";
                           print"<td>".$info[6]."</td>";
                           print"<td>".$info[7]."</td>";
                           print"<td>".$info[8]."</td>";
                           print"<td>".$info[9]."</td>";
                           print"<td>".$info[10]."</td></tr>";
                       }
                       print"</font>";
                       print"</table";
                       }
 else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";
        echo"<h1> Please Wait....you will be redirected In Soon</h1>";
                 header("refresh:1; url=tenderwrkreport.php");
 }

        ?>