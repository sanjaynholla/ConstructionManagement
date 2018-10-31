<html>
    <style>
       body {
                 background-image: url(IMG_20160207_115750886.jpg);
             
                  background-repeat: no-repeat;
                  background-size: 60% 160%;
                  background-position: 30% -50%;
                background-color: #adadad;
                float:left;
                 padding-left: 20px;  
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
              background-color: red;   
            }
            #fr {
                padding-top: 17px;
                margin-top: 40px;
                margin-left: 200px;
            }
     </style>
    <body>
        <form id="fr" name="pro" method="post" action="newinventary1.php">
            <h1> ENTER NEW PRODUCT </h1>
        <input type="text" name="newproduct">
        <input type="submit" value="submit" name="submit">
         </form>
 
   </body>
</html>