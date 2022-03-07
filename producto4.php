<html>
    <head>
        <title></title>
    </head>
    <style>
            body{
                display: flex;
                justify-content: center;
                text-align: center; 
            }
            p{
            
                font-weight: bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            img{
                width:300px;
                
            }
            form{
                margin-top: 15px;
            }
        </style>
    <body>
    <div>
     <p>Juego de Productos Deportivos</p>
     <img src="/deporte.jpg" alt="">
     <form action="form.php" method="POST">
        <input type="number" min="0" name="deporte" id="deporte">
        <input type="submit" value="Añadir a carrito">
    </form>
    </div>   
    </body>
</html>