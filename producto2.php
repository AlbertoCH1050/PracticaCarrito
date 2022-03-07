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
     <p>Set de Herramientas</p> 
     <img src="/herramientas.jpg" alt="">
     <form action="form.php" method="POST">
        <input type="number" min="0" name="herramienta" id="herramienta">
        <input type="submit" value="Añadir a carrito">
    </form>
    </div>  
    </body>
</html>