<html>	
    <head>
<title>INVENTORY REPORT</title>
<style>
	body {
		z-index: -10;
		}
			#menu { width:81em;
		background-color:black;
		display:black;
		position:relative;
		color:black;
		trnsperency:yes;
		border-style:outset;
		border:45px dotted;
		border-radius:-5px;
	}
#menu:hover {
	background-color:#c0c0c0;
	color:#c0c0c0;
}
.parent {display: block;position: relative;margin: -10px; width: 200px;float: left;line-height: 30px;background-color: #4FA0D8;border-right:#CCC 1px solid;}
.parent a{margin:15px;color:white;text-decoration: none;}
.parent:hover > ul {display:block;position:absolute;}
.child {display: none;}
.child li {background-color: #E4EFF7;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
.child li a{color: #000000;}
ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
ul ul ul{left: 100%;top: 0;margin-left:1px;}
li:hover {background-color: #95B4CA;}
.parent li:hover {background-color: #F0F0F0;}
.expand{font-size:12px;float:right;margin-right:5px;}
</style>
</head>


        <body>
         
	
	<ul id="menu">
	
            <li class="parent"><a href="tenderentry.php">Tender details</a>
	
	</li>
	
        <li class="parent"><a href="inventaryentry.php">Inventory Details</a>

	</li>
        
        <li class="parent"><a href="labourentry.php"> Labour details </a>

	</li>
	
	<li class="parent"><a href="#">Vehicle details <span class="expand">&raquo;</span></a>
	<ul class="child">			
		<li><a href="#">Driver Details</a></li>
		
		<li><a href="#">Vehicle Expense</a></li>
	</ul>
        </li>
	
        <li class="parent"><a href="tenderwrkreport.php">Work report</a>
            
            <ul class="child">
                <li><a href="tenderwrkreport.php">TENDER REPORT</a></li>
		
                <li><a href="inventaryreport.php">INVENTORY REPORT</a></li>
                <li><a href="vehiclereport.php">vehicle report</a></li>
                <li><a href="labourreport.php">Labour Report</a></li>
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
       $data=  mysql_query("select * from remainings") or die("could'nt select");
     
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
    <body>
        <h1><font color =red>CONTENTS INTHE DATABASE</font></h1>
    <table id="tble">
        <tr>  <th>work no</th><th>product type1</th><th>Quantity</th><th>Unit</th> <th>Price</th>  <th>product type2</th><th>Quantity</th><th>Unit</th> <th>Price</th> <th>product type</th><th>Quantity</th><th>Unit</th><th>Price</th> <th>Total Cost</th><th>Remaining Inventary Balance</th></tr>
           <?php
             
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
                <?php echo $info[10]; ?>
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
                <?php echo $info[11]; ?>
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
                <?php echo $info[12]; ?>
            </td>
             <td class="alt">
                <?php echo $info[8]; ?>
            </td>
             <td class="alt">
                <?php echo $info[9]; ?>
            </td>
            <td class="alt">
                <?php echo $info[13]; ?>
            </td>
            <td class="alt">
                <?php echo $info[14]; ?>
            </td>
            
        </tr>
        <?php } ?>
    </table>                      
        <BR><BR>             
        <a href="remainingpro.php">TO ENTER REMAINING INVENTARY PRODUCTS IN STOCK CLICK HERE...</a>
    </body>
</html>