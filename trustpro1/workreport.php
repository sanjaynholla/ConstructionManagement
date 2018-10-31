<?php
    
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
           $qry=  mysql_query("update trustpro2t set totalco=cost-(emd+securitydep+itax+royalty+nsc+salestax+cbs+price+labourco) where workno=30") or die("could'nt select");
            $res=  mysql_query($qry,$con);
             $data=  mysql_query("select totalco from trustpro2t where workno=30") or die("x");
             
                     print"<table border='1' cellpadding='6' cellspacing='5' bgcolor='blue' tablesize=60% fontsize=40px>";
               print"<h1><font color=red>CONTENTS INTHE DATABASE</font></h1>";
                       print"<h1><font color=red><th>totalco</th></font></h1>";
                       
                       while($info=  mysql_fetch_array($data))
                       {
                           print"<tr>";
                           print"<td>".$info[0]."</td><tr>";
                       }    
                          print"</font>";
                       print"</table";
                      
            
?>