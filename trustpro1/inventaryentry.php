 <?php
           define('db_host','localhost');
             define('db_name','trustpro1d');
                define('db_user','root');
                define('db_pass','');
            $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
            $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
             $qry = "select * from products";
            $res=  mysql_query($qry,$con);
             $qry11 = "select * from products";
            $res11=  mysql_query($qry,$con);
             $qry21 = "select * from products";
            $res21=  mysql_query($qry,$con);
             $qry1="select * from trustpro2t";
           $res1=  mysql_query($qry1,$con);
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
                    confirm("Confirm to submit");
                }
                function scripr()
                {
                    confirm("Confirm to reset");
                }
            </script>
            
            
            
<style>
		body {
		z-index: -10;
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
		
		body {
		background-color:#8c2e2e;
		}
			#main { 
                         
			width:65em;
			height:345px;
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
                            margin-top: -7.8em;
                        }
                          #but01 {
                           
                            margin-left: 42em;
                            margin-top: -9.0em;
                            background-color: #FFCB00;
                            color:blueviolet;
                        }
			#re {
			float:right;
			margin-top:60px;
			border-style:outset;
			}
             
		</style>
		
		
	</head>
	<body>
         
        <form name="tenderdet" method="post" action="inventarysave.php" onsubmit="return chkb();">
	
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
            <pre><font size="4px"><center><h1>INVENTORY DETAILS</h1></font></center></pre>
		
		
		<div id="main">
                    <div>       
						<span id="worktype" class="info">Enter The Details</span><br><br>
                                                <label>Work order no &nbsp;</label>&nbsp;
                                                 <select  name="workno">
                                                              <option value="0" >select work order</option>
                                                               <?php
     
                                                                    while($re= mysql_fetch_array($res1))
                                                                    {
                                                                        $workno = $re['workno'];
   
                                                                ?>
    
                                                              <option value="<?php echo $workno ?>" ><?php  echo $workno ?></option>
                                                              <?php } ?>
                                                 </select>
					</div>
			
					<div id="a">
					 
                                            <span id="workid" class="info"></span><br/>
                                                <label> Product Name</label>&nbsp;
                                                <select name="producttype1" id="userid1" class="InputBox">
                                                        
                                                           <option value="0" >Select the Product</option>
                                                               <?php
                                                                     
                                                               
                                                                        
     
                                                                    while($pro= mysql_fetch_array($res))
                                                                    {
                                                                        $product = $pro['product'];
   
                                                                ?>
    
                                                              <option  value="<?php echo $product ?>" > <?php echo $product ?></option>
                                                              <?php } ?>
                                                        
                                                        
                                                    </select>
                                                <label>Quantity</label> <input type="number" name="quantity1" id="worktype1" class="InputBox">
                                                 <label>Unit</label><input type="text" name="unit1" id="worktype1" class="InputBox">
                                                 <label>Price</label> <input type="number" name="price1" id="worktype1" class="InputBox">
                                     
                                        </div>
				
                    
                                        <div>
						<label>Product Name</label>&nbsp;
                                                   <select name="producttype2" id="userid1" class="InputBox">
                                                        <label> Product Name</label>&nbsp;
                                                           <option value="0" >Select the Product</option>
                                                               <?php
                                                                     
                                                               
                                                                        
     
                                                                    while($pro1= mysql_fetch_array($res11))
                                                                    {
                                                                        $product1 = $pro1['product'];
   
                                                                ?>
    
                                                              <option  value="<?php echo $product1 ?>" > <?php echo $product1 ?></option>
                                                              <?php } ?>
                                                        
                                                        
                                                    </select>      
                                         
                                   
                                                <label>Quantity</label> <input type="number" name="quantity2" id="worktype1" class="InputBox">
                                                 <label>Unit</label><input type="text" name="unit2" id="worktype1" class="InputBox">
                                                 <label>Price</label> <input type="number" name="price2" id="worktype1" class="InputBox">
					</div>
                    
                                         <div>
                                                <label> Product Name</label>&nbsp;
						       <select name="producttype3" id="userid1" class="InputBox" >
                                                        
                                                           <option value="0" >Select the Product</option>
                                                               <?php
                                                                     
                                                               
                                                                        
     
                                                                    while($pro1= mysql_fetch_array($res21))
                                                                    {
                                                                        $product1 = $pro1['product'];
   
                                                                ?>
    
                                                              <option  value="<?php echo $product1 ?>" > <?php echo $product1 ?></option>
                                                              <?php } ?>
                                                        
                                                        
                                                    </select>
                                                <label>Quantity</label> <input type="number" name="quantity3" id="worktype1" class="InputBox">
                                                 <label>Unit</label><input type="text" name="unit3" id="worktype1" class="InputBox">
                                                 <label>Price</label> <input type="number" name="price3" id="worktype1" class="InputBox">
					</div>
               
					<div>
                                                <input type="submit"  value="submit"  onclick="scrips();" class="btn"/>
						<input type="reset" class="btn"  onclick="scripr();" value="Reset"/>
                                         </div> 
                    </div>
		</form>
            
            <form name="add" action="newinventary.php">
                        <input type="submit"  value="add new" class="btn" id="but0">
                           
            </form>
            <form name="update" action="inventaryupdatepre.php">
                        <input type="submit"  value="UPDATE" class="btn" id="but01">
                           
            </form>
            
	</body>
</html>