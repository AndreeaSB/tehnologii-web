<?php

 include "conectare.php";

    $query="SELECT *FROM anunturi";
    $result=mysqli_query($conexiune,$query);
     if(mysqli_num_rows($result)){
        print("<h4>Anunturi</h4>");
        while($row=mysqli_fetch_array($result)){
            print("<h6>".htmlspecialchars($row[titlu])."</h6>");
            print("<p>".htmlspecialchars($row[anunt])."</p>");
        } 
    }
    else{
         print "Nu exista anunturi!";
     }
 ?>