    <?php

           define('db_host','localhost');
           define('db_name','trustpro1d');
           define('db_user','root');
           define('db_pass','');
           $con=  mysql_connect(db_host,db_user,db_pass) or die("coldnt connect");
           
           $db=mysql_select_db(db_name,$con) or die("couldnt select the database");
       $data=  mysql_query("select * from trustpro2t") or die("could'nt select");
     
       ?>
<html>
   
    <head>
        <style>
            #tble {
                width:90%;
                border-bottom: 1px solid red;
                
                border-top:1px solid green;
                
               
                
                border-left: 10px solid blue;
                 border-right: 10px solid blue;
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
            .alt2 {
                color: red;
                background-color: #6495ed;
            }
        </style>
    </head>

        
    
    <body>
    <table id="tble">
        <tr>  <th>work</th> <th>type</th> <th>cbs</th> <th>nsc</th> <th>others</th> </tr>
        
        
           <?php
             print"<h1><color =red>CONTENTS INTHE DATABASE</font></h1>";
               while($info=  mysql_fetch_array($data))
              {
                
           ?>      
        <tr>
            <td class="alt">
                <?php echo $info[1]; ?>
            </td>
             <td class="alt2">
                <?php echo $info[2]; ?>
            </td>
            <td class="alt">
                <?php echo $info[3]; ?>
            </td>
            <td class="alt2">
                <?php echo $info[4]; ?>
            </td>
            <td class="alt">
                <?php echo $info[5]; ?>
            </td>
        </tr>
        <?php } ?>
    </table>                      
                       
           <?php              
                        print" <br></br>";
                        
                        print" </n>";
                          print"<form action='update.php' method='post' name='r'>";
                        print"<font color='green'>update  records</font>";
                        print"<input type='submit' value='update'/>";
                        print"</form>";
                       
                        
                        
                        print"<form action='search.php' method='post' name='s'>";
                        print"<font color='yellow'>serch  using work number</font>";
                        print"<input type='text' name='wno' align='center' align='right'>";
                        print"<input type='submit' value='SEARCH'>";
                        print"</form>";
                        
                         print"<form action='delete.php' method='post' name='e'>";
                          print"<font color='red'> delete recordsb using work number</font>";
                          print"<input type='text' name='wno' align='center' align='right'>";
                         print"<input type='submit' value='DELETE'>";
                          print"</form>";
                      
                      
            
        ?>
        
     
    </body>
</html>