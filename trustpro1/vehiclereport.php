<html>	
    <head>
<title>VEHICLE REPORT</title>
<style>
#menu { width:78em;
		background-color:black;
		display:black;
		position:relative;
		color:black;
                border-left: 20px;
		trnsperency:yes;
		border-style:outset;
		border:45px solid black;
		border-radius:5px;
                margin-left: 5px;
                z-index: 10;
	}
#menu:hover {
	background-color:#95B4CA;
	color:#2FC332;
}
.parent {display: block;position: relative;margin: -8px; width: 180px;float: left;line-height: 30px;background-color: #4FA0D8;border-left:#CCC 2px solid;}
.parent a{margin:15px;color:white;text-decoration: none;}
.parent:hover > ul {display:block;position:absolute;}
.child {display: none;}
.child li {background-color: #4FA0D8;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
.child li a{color: #000000;}
ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
ul ul ul{left: 100%;top: 0;margin-left:1px;}
li:hover {background-color: #CCC;}
.parent li:hover {background-color: #F0F0F0;}
.expand{font-size:12px;float:right;margin-right:5px;}
</style>
</head>


        <body>
         
	
<ul id="menu">
	
            <li class="parent"><a href="tenderentry.php">Tender details</a>
	
	</li>
	
        <li class="parent"><a href="inventaryentry.php">Inventory Details</a>
            <ul class="child">			
                <li><a href="remainingpro.php">Stock Remaining</a></li>
	</ul>
	</li>
        
        <li class="parent"><a href="labourentry.php"> Labour Details </a>

	</li>
	
	<li class="parent"><a href="#">Vehicle Details <span class="expand">&raquo;</span></a>
	<ul class="child">			
		
		
            <li><a href="vehicledetails.php">Vehicle Expense</a></li>
	</ul>
        </li>
	
        <li class="parent"><a href="tenderwrkreport.php">Work Report</a>
            
            <ul class="child">
                <li><a href="tenderwrkreport.php">TENDER REPORT</a></li>
                <li><a href="inventaryreport.php">INVENTORY REPORT</a></li>
                <li><a href="vehiclereport.php">VEHICLE REPORT</a></li>
                <li><a href="labourreport.php">LABOUR REPORT</a></li>
                <li><a href="finalreport.php">FINAL REPORT</a></li>
                
            </ul>
            
          

	</li>

        <li class="parent"><a href="logout.php"> Log out </a>

	</li>
        <li class="parent"><a href="about.php"> About </a>

	</li>
	
        </ul> 
        </body>

</html>  


  <?php

           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
       $data=  mysql_query("select * from vehicle") or die("could'nt select");
     
       ?>
<html>
   
    <head>
        <style>
            #tble {
                width:90%;
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

        
    
    <body><center>
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
        <?php } ?>
    </table>                      
                       
           <?php              
                        print" <br></br>";
                        
                        print" </n>";
                          print"<form action='updatevehicle.php' method='post' name='r'>";
                        print"<font color='green'>Update records</font>";
                        print"<input type='submit' value='update'/>";
                        print"</form>";
                       
                        
                        
                        print"<form action='searchvehicle.php' method='post' name='s'>";
                        print"<font color='blue'>Search using Work Order Number </font>";
                        print"<input type='text' name='wno' align='center' align='right'>";
                        print"<input type='submit' value='SEARCH'>";
                        print"</form>";
                        
                     
                      
            
        ?>