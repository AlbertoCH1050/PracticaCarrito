<html>
    <head>
        <title></title>
        <style>
            body{
                display: flex;
                justify-content: center;
                text-align: center;
                flex-direction: column;
            }
         a{
            margin-top: 20px;
            font-size: 30px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            text-decoration: none;
         }
         .column{
             display: flex;
             flex-direction: column;
             justify-content: center;
            text-align: center;
            width: 100%;

         }
        .row{
            display: flex;
            justify-content: space-evenly;
            text-align: center;
            width: 70%;
            margin: auto;
            

        }
    </style>
    </head>
    
    <body>
        <a href="/index.php">Volver a la página principal</a>
        <div class="column">
            <?php
            
                if(isset($_COOKIE['fruta'])){
                    ?> 
                    <div class="row">
                        <h3><?php echo "Pack de frutas" ?></h3>
                        <h3><?php echo $_COOKIE['fruta'] ?></h3>
                    </div>
                    <?php
                }           
            ?>
            <?php
                if(isset($_COOKIE['herramienta'])){
                    ?> 
                    <div class="row">
                        <h3><?php echo "Set de Herramientas" ?></h3>
                        <h3><?php echo $_COOKIE['herramienta'] ?></h3>
                    </div>
                    <?php
                }           
            ?>
            <?php
                if(isset($_COOKIE['ropa'])){
                    ?> 
                    <div class="row">
                        <h3><?php echo "Conjunto de Ropa" ?></h3>
                        <h3><?php echo $_COOKIE['ropa'] ?></h3>
                    </div>
                    <?php
                }           
            ?>
            <?php
                if(isset($_COOKIE['deporte'])){
                    ?> 
                    <div class="row">
                        <h3><?php echo "Juego de Productos Deportivos" ?></h3>
                        <h3><?php echo $_COOKIE['deporte'] ?></h3>
                    </div>
                    <?php
                }           
            ?>
        </div>
    </body>
</html>