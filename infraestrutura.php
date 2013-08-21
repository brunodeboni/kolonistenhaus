<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="resources/css/default.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="resources/plugins/bxslider/jquery.bxslider.min.js"></script>
	<link href="resources/plugins/bxslider/jquery.bxslider.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <img src="resources/img/logo.png" width="170">
            </div>
            <div id="menu">
                <ul class="menu-container">
                    <li class="li-menu"><a href="index.php">Página Inicial</a></li>
                    <li class="li-menu"><a href="">Recepção</a></li> 
                    <li class="li-menu"><a href="">1º Piso</a></li>
                    <li class="li-menu"><a href="">2º Piso</a></li>
                    <li class="li-menu"><a href="">Bar</a></li>
                    <li class="li-menu"><a href="">Cozinha</a></li>
                    <li class="li-menu"><a href="">Pátio & Estacionamento</a></li>
                    <li class="li-menu"><a href="">Play-ground & casa da árvore</a></li>
                    <li class="li-menu"><a href="">Passeio</a></li>
                    <li class="li-menu"><a href="">Galeria do colono</a></li>
                    <li class="li-menu"><a href="">Pizzaria</a></li>
                    <li class="li-menu"><a href="">Jardins</a></li>
                    <li class="li-menu"><a href="">Lancheria colonial</a></li>
                    <li class="li-menu"><a href="">Espaço campeiro / piquete</a></li>
                </ul>
            </div>
            <div id="content">
                <h1>Infra-Estrutura</h1>
                <ul class="bxslider">
                    <li><img src="resources/img/home/weiblich-banheiro.png" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/mannlich-banheiro.png" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/kolonisten-haus-k.png" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/beer-glass.png" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/13.png" width="750" height="500" style="border: 0;"></li>
                </ul>
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
