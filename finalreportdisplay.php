 <html>
   
       <head>
        <style>
            #tble {
                width:100%;
                border-bottom: 5px solid#A7c942;
                
                border-top:5px solid#A7c942;
                
               
                
                border-left: 5px solid#98bf21;
                 border-right: 5px solid#98bf21;
            }
            #tble td, #tble th {
                font-size:1em;
                border:1px solid #98bf21;
                padding:3px 7px 2px 7px;
            }
            #tble th {
                font-size: 1.1em;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 4px;
                background-color: #A7c942;
                color: #ffffff;
            }
            .alt {
                color: #000000;
                background-color: #EAF2D3;
            }
            
        </style>
    </head>

        
    
    <body>
<?php
     include 'finalreport.php';
    $wno=$_POST['text1']; 
   $find=$_POST['same'];
     $find;
     $wno;
    
          define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
       $data=  mysql_query("select * from trustpro2t where workno='$wno'") or die("could'nt select");
       $data1= mysql_query("select * from vehicle where workno='$wno'") or die("could'nt select");
   ?>
    <?php
    if($find=='Tender')
    {
        if(mysql_num_rows($data))
        {
     ?>   


    <table id="tble">
        <tr>  <th>work no</th> <th>work type</th> <th>cost</th><th>Emd</th><th>security</th><th>IncomeTax</th><th>royalty</th> <th>Nsc</th> <th>SiteName</th> <th>salesTax</th><th>remark</th> </tr>
        
        
           <?php
             print"<h1><color =silver>CONTENTS INTHE DATABASE</font></h1>";
               while($info=  mysql_fetch_array($data))
              {
                
           ?>      
        <tr>
            <td class="alt">
                <?php echo $info[0]; ?>
            </td>
             <td class="alt2">
                <?php echo $info[1]; ?>
            </td>
            <td class="alt">
                <?php echo $info[2]; ?>
            </td>
            <td class="alt2">
                <?php echo $info[3]; ?>
            </td>
            <td class="alt">
                <?php echo $info[4]; ?>
            </td>
            <td class="alt2">
                <?php echo $info[5]; ?>
            </td>
            <td class="alt">
                <?php echo $info[6]; ?>
            </td>
            <td class="alt2">
                <?php echo $info[7]; ?>
            </td>
            <td class="alt">
                <?php echo $info[8]; ?>
            </td>
            <td class="alt2">
                <?php echo $info[9]; ?>
            </td>
            <td class="alt">
                <?php echo $info[10]; ?>
            </td>
        </tr>
    <?php }  }
            else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";                 
 }
       } ?>
    </table>  
    <?php    
      if($find=='Inventary')
     {
          if(mysql_num_rows($data))
        {
    ?>
       <table id="tble">
        <th>work no</th><th>product type</th><th>Quantity</th><th>Unit</th> <th>Price</th>  <th>product type</th><th>Quantity</th><th>Unit</th> <th>Price</th> <<th>product type</th><th>Quantity</th><th>Unit</th> <th>Price</th>
        
           <?php
             print"<h1><color =red>CONTENTS INTHE DATABASE</font></h1>";
               while($info=  mysql_fetch_array($data))
              {
                
           ?>      
            
             <tr>
            <td class="alt">
                <?php echo $info[0]; ?>
            </td>
            <td class="alt">
                <?php echo $info[11]; ?>
            </td>
            <td class="alt">
                <?php echo $info[12]; ?>
            </td>
            <td class="alt">
                <?php echo $info[13]; ?>
            </td>
            <td class="alt">
                <?php echo $info[14]; ?>
            </td>
             <td class="alt">
                <?php echo $info[15]; ?>
            </td>
             <td class="alt">
                <?php echo $info[16]; ?>
            </td>
             <td class="alt">
                <?php echo $info[17]; ?>
            </td>
             <td class="alt">
                <?php echo $info[18]; ?>
            </td>
             <td class="alt">
                <?php echo $info[19]; ?>
            </td>
             <td class="alt">
                <?php echo $info[20]; ?>
            </td>
             <td class="alt">
                <?php echo $info[21]; ?>
            </td>
             <td class="alt">
                <?php echo $info[22]; ?>
            </td>
            
        </tr>
        
     <?php } }
     
                else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";                 
 }
              } ?>
    </table>               
     
     <?php
      if($find=='Labour')
      {
          if(mysql_num_rows($data))
        {
     ?>
        
         <table id="tble">
        <tr>  <th>work no</th><th>Date </th><th>SiteName</th> <th>Labour</th> <th>Labour cost</th> <th>Labour no</th> </tr>
        
        
           <?php
             print"<h1><color =red>CONTENTS INTHE DATABASE</font></h1>";
               while($info=  mysql_fetch_array($data))
              {
                
           ?>      
        <tr>
            <td class="alt">
                <?php echo $info[1]; ?>
            </td>
             <td class="alt">
                <?php echo $info[23]; ?>
            </td>
            <td class="alt">
                <?php echo $info[24]; ?>
            </td>
            <td class="alt">
                <?php echo $info[25]; ?>
            </td>
            <td class="alt">
                <?php echo $info[26]; ?>
            </td>
            <td class="alt">
                <?php echo $info[27]; ?>
            </td>
            
            
        </tr>
      <?php } } 
      
                 else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";                 
 }
              } ?>
         </table>
          <?php
      if($find=='Vehicle')
      {
          if(mysql_num_rows($data))
        {
     ?>
        
       <table id="tble">
        <tr>  <th>Work no</th><th>Date </th><th>Vehicle Name</th><th>Quantity</th> <th>Trips Number</th> <th>Cost per trip</th><th>Total Cost</th> </tr>
 <?php
             print"<h1><color =red>CONTENTS INTHE DATABASE</font></h1>";
               while($info=  mysql_fetch_array($data))
              {               
           ?>      
        <tr>
            <td class="alt">
                <?php echo $info[0]; ?>
            </td>
             <td class="alt">
                <?php echo $info[1]; ?>
            </td>
            <td class="alt">
                <?php echo $info[2]; ?>
            </td>
            <td class="alt">
                <?php echo $info[3]; ?>
            </td>
            <td class="alt">
                <?php echo $info[4]; ?>
            </td>
            <td class="alt">
                <?php echo $info[5]; ?>
            </td>
            <td class="alt">
                <?php echo $info[6]; ?>
            </td>     
        </tr>
      <?php } } 
      
                 else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";                 
 }
              } ?>
    </table>                      
     <?php 
       if($find=='REPORT')
     {
           if(mysql_num_rows($data))
        {
    ?>
       <table id="tble">
           <th>Work Number</th><th>Type Of Work</th><th>Site Name</th><th>Total Tender Cost</th> <th>Emd</th>  <th>Security Deposit</th><th>Income Tax</th><th>Royalty</th><th>Nsc</th><th>Sales Tax</th><th>Labour Payment</th><th>Total Products Cost</th><th>Vehicle Expence</th><th>Total Expenditure</th><th>Balance In Your Tender Cost</th>
           <?php
             print"<h1><color =silver>CONTENTS INTHE DATABASE</font></h1>";
             $info1=  mysql_fetch_array($data1);
               $info=  mysql_fetch_array($data);  
                $totalexp= $info[3]+$info[4]+$info[5]+$info[6]+$info[7]+$info[9]+$info[26]+$info[28]+$info1[6];
                $balance= $info[2]-$totalexp;
                 $qry="update trustpro2t set totalexp='$totalexp',balance='$balance' where workno='$wno'";
     $res=  mysql_query($qry,$con); 
     if($res) {
            echo "<script type='text/javascript'> alert('Total balance is calculated!'); </script>"; 
     }
     else {  echo "<script type='text/javascript'> alert('Sorry Total balance is Not Calculated!'); </script>"; }
    ?>
            
           <tr> 
            <td class="alt">
                <?php echo $info[0]; ?>
            </td>
            <td class="alt">
                <?php echo $info[1]; ?>
            </td>
            <td class="alt">
                <?php echo $info[8]; ?>
            </td>
            <td class="alt">
                <?php echo $info[2]; ?>
            </td>
            <td class="alt">
                <?php echo $info[3]; ?>
            </td>
             <td class="alt">
                <?php echo $info[4]; ?>
            </td>
             <td class="alt">
                <?php echo $info[5]; ?>
            </td>
             <td class="alt">
                <?php echo $info[6]; ?>
            </td>
             <td class="alt">
                <?php echo $info[7]; ?>
            </td>
             <td class="alt">
                <?php echo $info[9]; ?>
            </td>
             <td class="alt">
                <?php echo $info[26]; ?>
            </td>
             <td class="alt">
                <?php echo $info[28]; ?>
            </td>
            <td class="alt">
                <?php echo $info1[6]; ?>
            </td>
             <td class="alt">
                <?php echo $info[29]; ?>
            </td>
             <td class="alt">
                <?php echo $info[30]; ?>
            </td>
        </tr>
     <?php 
        if($info[30] < 0)
        {
            $balance= 0-$balance;
            echo "<h1><font color='blue'> you get loss of rupeese '$balance!!'</font>";
        }
         if($info[30] > 0)
        {
            echo "<font color='blue'><h1> you get Profit of rupeese '$info[30]!!'</font>";
        }
     
     } 
     
                else {
     echo "<script type='text/javascript'>  alert('Sorry, No Records found for given work number!');</script>";                 
 }
        } ?>
    </table>               
    </body>
     </html>