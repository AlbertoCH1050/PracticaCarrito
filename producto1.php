<html>
    <head>
        <title></title>
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
    </head>
    <body>
        <div>
     <p>Pack de Frutas</p> 
    <img src="/fruta.jpg" alt=""> 
    <form action="form.php" method="POST">
        <input type="number" min="0" name="fruta" id="fruta">
        <input type="submit" value="Añadir a carrito">
    </form>
    </div> 
    </body>
</html>