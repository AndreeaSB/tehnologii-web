<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
     <title>Conferinta nationala de pediatrie</title>
     <link href="cssfile.css" rel="stylesheet" type="text/css" />
 </head>
  <body>

          <div id="header">
                  <div id="nume">
                      <h2>Conferinta nationala de pediatrie</h2>
                  </div>
                  <div id="meniu">
                      <a href="csshome.html">Home</a>  &nbsp;|&nbsp;
                      <a href="cssconsiliu.html"> Consiliu </a> &nbsp;|&nbsp;
                      <a href="cssprogram.html"> Program</a>  &nbsp;|&nbsp;
                      <a href="csscontact.html">Detalii de contact</a>  &nbsp;|&nbsp;
                      <a href="cssdespre.html">Alte informatii</a> &nbsp;|&nbsp;
                      <a href="anunturi.php">Anunturi</a> &nbsp;|&nbsp;
                      <a href="participanti.php">Participanti</a> &nbsp;|&nbsp;
                      <a href="formular.php">Inscriere</a>
                  </div>
          </div>

          <div id="content">
              <div id="empty_col">
                
              </div>
              <div id="text">
              <?php

                include "conectare.php";

                $query="SELECT *FROM anunturi";
                $result=mysqli_query($conexiune,$query);
                if(mysqli_num_rows($result)){
                   print("<h4>Anunturi</h4>");
                   while($row=mysqli_fetch_array($result)){
                         print("<h5>".htmlspecialchars($row[titlu])."</h5>");
                         print("<p>".htmlspecialchars($row[anunt])."</p>");
                     } 
                  }
                 else{
                     print "Nu exista anunturi!";
                }
              ?>
              </div>
              <div id="empty_col">

              </div>
          </div>

          <div id="footer">
                <p>AndreeaSB@2019.All rights reserved</p>
          </div>

  </body>
</html>