    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Safadometro </title>
    
    </head>
    
    <body>
        
        <h1 style="text-align: center;"> <span style="color: blue;"> Anjo </span> ou <span style="color: red;"> Vagabundo? </span> </h1>  
        <h2 style="text-align: center;"> 99% anjo perfeito, mas aquele 1% é vagabundo, já diria Wesley Safadão! E aí, quantos % você é? </h2>
        
        <form action="safadometro.view.php" method="GET">
        
        <p> Digite o dia que você nasceu: </p>
            <input type="number" min="1" max="31" name="dia">
        
        <p> O mês: </p>
            <input type="number" min="1" max="12" name="mes">
        
        <p> E o ano: (Digite apenas os últimos dois números)</p>
            <input type="number" min="00" max="99" name="ano">
        
        <input type="submit">
    
        </form>
    
    </body>
    
    </html>