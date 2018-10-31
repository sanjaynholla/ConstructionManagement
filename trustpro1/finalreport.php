<html>
   
    <head>
        <style>
            body {
                 background-image: url(programming_tech_computer_abstract_pattern_texture_1920x1200.jpg);
                  background-repeat: no-repeat;
                  background-size: 100% 160%;
                background-color: #adadad;
                float:left;
               margin: 60px 50px 20px;    
               
            }
            #frm {
                margin-left: 23em;
                 padding-left: 40px;
                padding-top: 30px;
                margin-bottom: -20px;
                 background-image: url(121.jpg);
                background-repeat: no-repeat;
                background-size:100% 100%;
                width:57%;
                height:78%;
                border: 7px  solid plum;
                
            }
            a {
                   margin: 3em;
                background-color: yellow;
            }
            h1,h2 {
                color: orange;
               // font-family: Grande, sans-serif;
                //text-shadow: 2px 2px yellow;
            }
           input[type=text]
            {
                background-color: palegoldenrod;
                width: 30%;
                height: 10%;
            }
            input[type=submit]
            {
              background-color: greenyellow;   
            }
    </style>
    </head>
    <body>
        
   
        <form id="frm" method="post" action="finalreportdisplay.php">
             <pre><h1>Enter work order number </h1></pre>
             <pre><input type="text" name="text1" required>        
                                <h2>Display records related to </h2><input name="same" type="submit" value="Tender"/>  <input name="same" type="submit" value="Inventary"/>  <input name="same" type="submit" value="Vehicle"/>  <input type="submit" name="same" value="Labour"/></pre>
                     <pre><h2>DISPLAY FINAL REPORT TO THIS WORK NUMBER </h2><input type="submit" name="same" value="REPORT"/></pre>
                       <a href="tenderentry.php"><h3>GO TO HOME</a></h3>
        </form>
       
    </body>
</html>
