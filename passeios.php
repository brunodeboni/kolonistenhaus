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
                    <li class="li-menu"><a href="#rotaromantica.php">Rota Romântica</a></li>
                    <li class="li-menu"><a href="#caminhosdacolonia.php">Caminhos da colônia</a></li>
                    <li class="li-menu"><a href="#monumentos.php">Monumentos Históricos</a></li>
                </ul>
            </div>
            <div id="content">
                <h1>Passeios Turísticos</h1>
                <div id="construcao">
					Página em construção.
				</div>
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
