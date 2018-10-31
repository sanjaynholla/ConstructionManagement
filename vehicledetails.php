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
                
                  function chkb()
		{
			for(i=0;i<document.forms[0].elements.length;i++)
			{
				if(document.forms[0].elements[i].type=="text")
				{
					if(document.forms[0].elements[i].value=="")
					{
						alert("please fill all the fields");
                                                document.forms[0].elements[i].focus();
						return false;
					}
				}
			}
		}
            
                function scrips()
                {
                    confirm("really want to submit");
                }
                function scripr()
                {
                    confirm("really want to reset");
                }
            </script>
            
            
            
		<style>
		body {
		z-index: -10;
		}
			#menu { width: 78em;
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
		
		body {
		background-color:#8c2e2e;
		}
			#main { 
                        position:relative;
			width:780px;
			height:350px;
			margin-left:140px;
			margin-top:25px;
			color:red;
			background:#3c3c3c;
			border-radius:50px;
			box-shadow:4px 4px 30px  yellow;
                        text-shadow:4px 4px 30px royalblue;
			border: 4px  solid yellowgreen ;
                        padding:30px;
			}
			body{width:610px;}
			
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
			color:blueviolet;
                        z-index: +330;
			}
			.btn {
			background-color:#2FC332;padding:5px 30px;color:#FFF;border:#F0F0F0 3px solid; border-radius:4px;
                        margin-top: -65px;
                        margin-left:10px;
			}
                            #but0 {
                            margin-left: 22em;
                            margin-top: -7.2em;
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
             <form name="frm" method="post" action="savevehicle.php" onsubmit="return chkb()";>
	
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
                 <pre><font  size="4px"><center><h1>VEHICLE DETAILS</h1></center></font></pre>
		
		
		<div id="main">
			
					<div id="a">
					
                                                <span id="workid" class="info"><?php echo "ENTER THE FALLOWING DETAILS"; ?></span><br/>
                                                <span id="workid" class="info"><?php echo ""; ?></span><br/>
						<span id="worktype" class="info"></span><br/>
						<label>Work order no</label>
                                                 <select  name="workno">
                                                              <option value="0" >select work order</option>
                                                               <?php
     
                                                                    while($re= mysql_fetch_array($res))
                                                                    {
                                                                        $workno = $re['workno'];
   
                                                                ?>
    
                                                              <option value="<?php echo $workno ?>" onclick="getval('<?php echo $re['productname']; ?>','<?php echo $re['type']; ?>','<?php echo $re['quantity']; ?>','<?php echo $re['unit']; ?>','<?php echo $re['price']; ?>');" > <?php echo $workno ?></option>
                                                              <?php } ?>
                                                </select>
                                                <input type="hidden" name="find" value="i">
						<label>Quantity</label> <input type="text" name="quantity" id="worktype1" class="InputBox">
                                                <label>Date </label><input type="date" name="date" id="worktype1" class="InputBox">
						
					</div>
					
					<div id="a">
                                            
                                            
						<span id="worktype" class="info"></span><br/><?php echo ""; ?></span><br/>
						<label>Vehicle Used</label><input type="text" name="vehicle" id="worktype1" class="InputBox">
						<label> Cost per trip</label> <input type="text" name="cost" id="worktype1" class="InputBox">
                                                
                                                
                                                
					</div>
				
					<div> 
                                            <span id="worktype" class="info"></span><br/><?php echo ""; ?></span><br/>
						<label> Number of trips</label> <input type="text" name="tripsno" id="worktype1" class="InputBox">
                                               
                                                
                                                
					</div>
                    <div>                   <span id="worktype" class="info"></span><br/><?php echo ""; ?></span><br/>
                                            <input type="submit"  value="submit"  onclick="scrips();" class="btn"/>
						<input type="reset" class="btn" onclick="scripr();" value="Reset"/>
                    </div>
			
		
		</form>
                <form name="update" action="updatevehicle.php">
                         <input type="submit"  value="UPDATE" class="btn" id="but0">
                           
            </form>
                </div>
         
               <script type="text/javascript" src="jque1ver/jqry1ver.js"></script>
               <script type="text/javascript" src="cssfocus.js"></script> 
	</body>
</html>