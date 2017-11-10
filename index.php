<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Battleship</title>
        <style>
            td {
                background-color: lightskyblue;
                width: 50px;
                height: 50px;
                
            }
            </style>
            
        <script>
            var ship = ["22", "23", "24"];
            var boot = ["47","57","67","77","87"];
            var vlot = ["93","95"];
            function fire(q){
                if(q==ship[0] || q==ship[1] || q==ship[2] ){
                    document.getElementById("myPos"+q).style.backgroundColor = 'red';                    
                    if(checkIfShipSunk(ship)){
                        alert("Ship has sunk");}
                   }else if(q==boot[0] || q==boot[1] || q==boot[2] || q==boot[3] || q==boot[4] ){
                            document.getElementById("myPos"+q).style.backgroundColor = 'red';                    
                            if(checkIfShipSunk(boot)){
                            alert("Ship has sunk");}
                            }else if(q==vlot[0] || q==vlot[1] ){
                                     document.getElementById("myPos"+q).style.backgroundColor = 'red';                    
                                     if(checkIfShipSunk(vlot)){
                                     alert("Ship has sunk");}
                    
                }else{
                    document.getElementById("myPos"+q).style.backgroundColor = 'blue';                    
                   
                }
            }
            function checkIfShipSunk(shipvar){
               for(xvar = 0; xvar < shipvar.length; xvar++ ){
                   var dekleur = document.getElementById('myPos'+shipvar[xvar]).style.backgroundColor;
                   alert('myPos'+shipvar[xvar]);//waarom blijft alert 22 aangeven ?   alert('myPos'+shipvar[xvar]);
                    if(dekleur != 'red'){
                       return false;
                   }
                } 
                return true;
            }
        </script>    
        
    </head>
    <body>
        <table>
                <?php
                for($x=1;$x<10;$x++){
                    echo "<tr>";
                    for($y=1;$y<10;$y++){
                        echo "<td  id=myPos$x$y onclick=fire($x$y)></td>";
                    }
                    "</tr>";
                }
                ?>
        </table>    
    </body>
</html>

