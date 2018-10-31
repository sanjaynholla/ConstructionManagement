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
        function getval(val1,val2,val3,val4,val5,val6,val7,val8,val9,val10,val11,val12)
        {
              document.form2.producttype1.value = val1;
              document.form2.quantity1.value = val2;
              document.form2.price1.value = val3;
              document.form2.unit1.value = val4;
               document.form2.producttype2.value = val5;
              document.form2.quantity2.value = val6;
              document.form2.unit2.value = val7;
              document.form2.price2.value = val8;
               document.form2.producttype3.value = val9;
              document.form2.quantity3.value = val10;
              document.form2.unit3.value = val11;
              document.form2.price3.value = val12;
               
              
        }
</script>


<style>
		body {
		z-index: -10;
		}
			#menu { width:80em;
		background-color:black;
		display:black;
		position:relative;
		color:black;
                border-left: 20px;
		trnsperency:yes;
		border-style:outset;
		border:45px solid black;
		border-radius:5px;
                margin-left: -8px;
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
                         
			width:65em;
			height:375px;
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
			color:khaki;
                        z-index: +330;
			}
			.btn {
			background-color:#2FC332;padding:5px 30px;color:#FFF;border:#F0F0F0 3px solid; border-radius:4px;
                        margin-top: 1.1em;
			}
                        #but0 {
                           
                            margin-left: 32em;
                            margin-top: -6.7em;
                        }
                          #but01 {
                            margin-left: 42em;
                            margin-top: -7.8em;
                            background-color: #FFCB00;
                            color:blueviolet;
                        }
			#re {
			float:right;
			margin-top:60px;
			border-style:outset;
			}
             
		</style>
		
		<script type="text/javascript">
			function sendcontact()
			{
				alert("needs to work");
			}
		</script>
	</head>
	<body>
         
        <form name="form2" method="post" action="inventarysave.php" onsubmit="return chkb();">
	
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
		<pre><font  size="4px"><center><h1>INVENTORY UPDATE</h1></center></font></pre>
		
		<div id="main">
                    <div>       
						<span id="worktype" class="info"></span><br/>
                                                <label>Work order no &nbsp;</label>
                                                 <select  name="workno" class="InputBox">
                                                              <option value="0" >select work order</option>
                                                               <?php
     
                                                                    while($re= mysql_fetch_array($res))
                                                                    {
                                                                        $workno = $re['workno'];
   
                                                                ?>
    
                                                              <option value="<?php echo $workno; ?>" onclick="getval('<?php echo $re['11']; ?>','<?php echo $re['12']; ?>','<?php echo $re['13']; ?>','<?php echo $re['14']; ?>','<?php echo $re['15']; ?>','<?php echo $re['16']; ?>','<?php echo $re['17']; ?>','<?php echo $re['18']; ?>','<?php echo $re['19']; ?>','<?php echo $re['20']; ?>','<?php echo $re['21']; ?>','<?php echo $re['22']; ?>');" > <?php echo $workno ?></option>
                                                              <?php } ?>
                                                </select>
					</div>
			
					<div id="a">
					 
						<span id="workid" class="info"></span><br/>
                                                <label>Product Name</label>
                                               <input type="text" name="producttype1" id="worktype1" class="InputBox">
                                              
                                                <label>Quantity</label> <input type="text" name="quantity1" id="worktype1" class="InputBox" required>
                                                 <label>Unit</label><input type="text" name="unit1" id="worktype1" class="InputBox">
						<label>Price</label> <input type="text" name="price1" id="worktype1" class="InputBox">
                                     
                                        </div>
				
                    
                                        <div>
						<span id="worktype" class="info"></span><br/>
                                                <label>Product Name</label> <input type="text" name="producttype2" id="worktype1" class="InputBox">
                                               <label>Quantity</label> <input type="text" name="quantity2" id="worktype1" class="InputBox">
                                                 <label>Unit</label><input type="text" name="unit2" id="worktype1" class="InputBox">
						<label>Price</label> <input type="text" name="price2" id="worktype1" class="InputBox">
					</div>
                    
                                         <div>
						<span id="worktype" class="info"></span><br/>
                                                <label>Product Name</label> <input type="text" name="producttype3" id="worktype1" class="InputBox">
                                               <label>Quantity</label> <input type="text" name="quantity3" id="worktype1" class="InputBox">
                                                 <label>Unit</label><input type="text" name="unit3" id="worktype1" class="InputBox">
						<label>Price</label> <input type="text" name="price3" id="worktype1" class="InputBox">
					</div>
					<div>
                                                <input type="submit"  value="submit"  onclick="scrips();" class="btn"/>
						<input type="reset" class="btn"  onclick="scripr();" value="Reset"/>
                                         </div> 
                    </div>
		</form>
          
            
        </body>
</html>