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
            function fire(q){
                if(q==ship[0] || q ==ship[1] || q ==ship[2] ){
                    document.getElementById("myPos"+q).style.backgroundColor = 'red';                    
                    if(checkIfShipSunk(ship)){
                        alert("Ship has sunk");
                    }
                }else{
                    document.getElementById("myPos"+q).style.backgroundColor = 'blue';                    
                   
                }
            }
            function checkIfShipSunk(shipvar){
               for(xvar = 0; xvar < shipvar.length; xvar++ ){
                   var dekleur = document.getElementById('myPos'+shipvar[xvar]).style.backgroundColor;
                   alert('myPos'+shipvar[xvar]);
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
                        echo "<td  id=myPos$x$y onclick=fire($x$y)>x</td>";
                    }
                    "</tr>";
                }
                ?>
        </table>    
    </body>
</html>

