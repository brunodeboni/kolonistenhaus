<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/default.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="resources/img/logo.png" width="170">
            </div>
            <div id="menu">
                <ul id="menu-container">
                    <li class="li-menu"><a href="index.php">Página Inicial</a></li>
                    <li class="li-menu"><a href="infraestrutura.php">Infra-Estrutura</a></li>
                    <li class="li-menu"><a href="comochegar.php">Como chegar</a></li>
                    <li class="li-menu"><a href="cardapio.php">Cardápio</a></li>
                    <li class="li-menu"><a href="passeios.php">Passeios Turísticos</a></li>
                    <li class="li-menu"><a href="atracoes.php">Músicas & Atrações</a></li>
                    <li class="li-menu"><a href="galeria.php">Galeria de Fotos</a></li>
                </ul>
            </div>
            <div id="content">
                <h1>Sites Interessantes</h1>
                
            </div>
        </div>
        <script>
        $(document).ready(function(){
                //Slider
                $('.bxslider').bxSlider({
                        slideWidth: 750,
                        mode: 'horizontal',
                        tickerHover: true,
                        autoHover: true,
                        responsive: false,
                        touchEnabled: true,
                        controls: false,
                        autoControls: true,
                        auto: true,
                        adaptiveHeight: false,
                        pager: true,
                        minSlides: 1,
                        maxSlides: 1
                });
        });
        </script>
    </body>
</html>
