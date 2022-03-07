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
     <p>Conjunto de Ropa</p> 
    <img src="/ropa.jpg" alt=""> 
    <form action="form.php" method="POST">
        <input type="number" min="0" name="ropa" id="ropa">
        <input type="submit" value="Añadir a carrito">
    </form>
    </div> 
    </body>
</html>