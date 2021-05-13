    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> ClimaTempo Online </title>

    </head>

    <body>
        
        <h1> Informe o nome da cidade que está buscando: </h1>
        
        <form action="temperatura.view.php" method="GET">
            
            <input type="text" name="campo_cidade"> <br />
            <input type="submit">
        
        </form>
    
        <br> <br>
            
            <a href="temperatura.view.php?campo_cidade=foz+do+iguacu">
                
                <button> Foz do Iguaçu</button>
            
            </a>
        
        <br> <br>
            
            <a href="tempo.view.php?campo_cidade=araquari">
                
                <button> Araquari </button>
            
            </a>
    
    </body>
    </html>