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
                function fire(q){
                 alert('q');
                 document.getElementById("myPos"+q).style.backgroundColor = "red";
                }
        </script>    
        
    </head>
    <body>
        <table>
                <?php
                for($x=1;$x<3;$x++){
                    echo "<tr>";
                    for($y=1;$y<3;$y++){
                        echo "<td  id=myPos$x$y onclick=fire($x$y)>x</td>";
                    }
                    "</tr>";
                }
                ?>
        </table>    
    </body>
</html>
