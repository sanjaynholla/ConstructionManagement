<?php
 
           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
            $qry="select * from trustpro2t";
           $res=  mysql_query($qry,$con);
?>

<html>
    <head>
        <script type="text/javascript">
        function getval(val1,val2,val4,val5)
        {
              document.form1.wtype.value = val1;
              document.form1.cost.value = val2;
              
              document.form1.cbs.value = val4;
              document.form1.remark.value = val5;
        }
</script>



<style>
		body {
                               background: transparent url(26855_3d_cyan_blue_3d_blue_balls.jpg);
                    
           background-size: 100% 100%; 
		z-index: +100;
		}
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
                margin-left: -20px;
                z-index: 10;
                
	}
#menu:hover {
	background-color:#95B4CA;
	color:#2FC332;
         
}
.parent { display: block;position: relative;margin: -8px; width: 180px;float: left;line-height: 30px;background-color: #4FA0D8;border-left:#CCC 2px solid;}
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
		
		body {
		background-color:#8c2e2e;
                
		}
			#main { 
                      
			width:750px;
			height:380px;
			margin-left:140px;
			margin-top:25px;
			color:green;
			background:#3c3c3c;
			border-radius:50px;
			box-shadow:4px 4px 30px  yellow;
                        text-shadow:4px 4px 30px royalblue;
			border: 4px  solid yellowgreen ;
                        padding:30px;
			}
			body{width:610px;
          
                        }
			
			label {
                          
			color:#ed9c28;
			border-style:outset;
			margin-left:10px;
			}
			div {
			
			margin-left:25px;
			margin-top:5px;
			margin-bottom:20px;
			}
			.InputBox {
			margin-left:20px;
			margin-top:5px;
			background-color:silver;
			border:1px solid red;
			border-radius:4px;
			padding:8px;
			
			}
			font {
			margin-left:0px;
			margin-height:0px;
			float:center;
			text-shadow:4px 4px 30px 30px greenyellow;
			text-decoration:underline;
			color:blue;
                        z-index: +330;
			}
			.btn {
			background-color:#2FC332;padding:5px 30px;color:#FFF;border:#F0F0F0 3px solid; border-radius:4px;
			}
                          #but0 {
                            margin-left: 59em;
                            margin-top: -8.2em;
                            color: red;
                            background-color: yellow;
                        }
			#re {
			float:left;
			margin-top:60px;
			border-style:outset;
			}
             
		</style>
		
		
	</head>
	<body> 
         <div id="main11">
        <form name="frm" method="post" action="tendersave.php" onsubmit="return chkb()";>
	
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
		<pre><font  size="4px"><center><h1>TENDER UPDATE</h1></center></font></pre>
		
		
		<div id="main">
			
					<div id="a">
					
                                                <span id="workid" class="info"></span><br/>
						<label>Site Name</label><input type="text" name="cbs"  class="InputBox">
						<label>Type of work</label><input type="text" name="wtype" id="worktype1" class="InputBox">
						
					</div>
					
					<div>
						<span id="worktype" class="info"></span><br/>
						<label>Workid</label><input type="text" name="workid" id="worktype1" class="InputBox">
						<label>Tender Costs</label> <input type="text" name="cost" id="worktype1" class="InputBox">
					</div>
				
					<div>
						<label id="re"> Remark</label> 
						<span id="content-info" class="info"></span><br/>
						<textarea name="remark" id="remark1" class="InputBox" cols="60" rows="6"></textarea>
					</div>
					<div>
                                                <input type="submit"  value="submit"  onclick="scrips();" class="btn"/>
						<input type="reset" class="btn" onclick="scripr();" value="Reset"/>
						TENDER SANCTIONED
						<input type="radio" value="sanctioned" name="radio1"/>
						TENDER APPLIED
						<input type="radio" value="applied" name="radio1"/>
					</div> 
			
			
		</div>

 </form>
           </body>
</html>
 