<?php

session_start();
print_r($_SESSION);
if(isset($_SESSION ['nome'])){
    if($_SESSION['nivel'] == 10){
        
        ?>
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <button>Sair</button>
        </body>
        </html>
        
<?php
    }

    else{
        echo'<meta http-equiv="refresh" content="2; URL=index.html">';
        }
    }
?>


