    <!DOCTYPE html>
    <html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title> Fake News </title>
    
    </head>

    <body>
        
        <h1 style="color: red;"> É fic, é fato? É Fake News! </h1>
        <h2> Descubra qual Fake News você seria! </h2>
        
        <form action="ficfato.view.php" method="GET">
        
            <p> Digite a primeira letra do seu nome: </p>
                
                <input type="text" name="letra_nome" onkeyup="this.value = this.value.toUpperCase()">
        
            <p> Digite o mês do seu nascimento: </p>
                
                <input type="text" name="mes_do_nascimento" onkeyup="this.value = this.value.toUpperCase()">
        
            <p> Digite o dia do seu nascimento: </p>
                
                <input type="number" min="1" max="31 "name="dia_do_nascimento">
        
            <input type="submit">
        
        </form>
    
    </body>
    </html>