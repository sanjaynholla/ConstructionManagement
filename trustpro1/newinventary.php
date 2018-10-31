<html>
    <style>
       body {
                 background-image: url(26854_3d_cyan_blue_3d_blue_blocks.jpg);
             
                  background-repeat: no-repeat;
                  background-size: 100% 300%; 
                  background-position: 30% +50%;
                float:left;
                 padding-left: 200px;  
                 margin-left: 30px;
            }
            h1 {
                text-shadow: 4px 2px yellow;
                 font-family: Grande, sans-serif;
                 font-size: 25px;
                 color: brown;
            }
             input[type=text]
            {
                background-color: lightgrey;
                width: 90%;
                height: 8%;
                
            }
            input[type=submit]
            {
                margin-top: 10px;
               margin-left: 75px;
              background-color: greenyellow;   
            }
            #fr {
                padding-top: 17px;
                margin-top: 40px;
                margin-left: 200px;
            }
     </style>
    <body>
        <form id="fr" name="pro" method="post" action="newinventary1.php">
            <h1> Enter The New Product to be Added </h1>
        <input type="text" name="newproduct" required>
        <input type="submit" value="submit" name="submit">
         </form>
 
   </body>
</html>