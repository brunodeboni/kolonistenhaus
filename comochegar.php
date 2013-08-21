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
                    <li class="li-menu"><a href="cardapio.php">Cardápio</a></li>
                    <li class="li-menu"><a href="passeios.php">Passeios Turísticos</a></li>
                    <li class="li-menu"><a href="atracoes.php">Músicas & Atrações</a></li>
                    <li class="li-menu"><a href="galeria.php">Galeria de Fotos</a></li>
                    <li class="li-menu"><a href="sites.php">Sites Interessantes</a></li>
                </ul>
            </div>
            <div id="content">
                <h1>Como chegar</h1>
                <iframe width="750" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=208972934983528767381.0004e47a878d6c736f48f&amp;ie=UTF8&amp;t=m&amp;ll=-29.524587,-51.180453&amp;spn=0.018671,0.032144&amp;z=15&amp;output=embed"></iframe><br />
                <span>Visualizar a <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=208972934983528767381.0004e47a878d6c736f48f&amp;ie=UTF8&amp;t=m&amp;ll=-29.524587,-51.180453&amp;spn=0.018671,0.032144&amp;z=15&amp;source=embed">localização do Kolonisten Haus</a> em um mapa maior.</span>
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
