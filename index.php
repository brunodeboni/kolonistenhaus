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
                <ul id="menu-container">
					 <li class="li-menu"><a href="comochegar.php">Como chegar</a></li>
                    <li class="li-menu"><a href="infraestrutura.php">Infra-Estrutura</a></li>
                   
                    <li class="li-menu"><a href="cardapio.php">Cardápio</a></li>
                    <li class="li-menu"><a href="passeios.php">Passeios Turísticos</a></li>
                    <li class="li-menu"><a href="atracoes.php">Músicas & Atrações</a></li>
                    <li class="li-menu"><a href="galeria.php">Galeria de Fotos</a></li>
                    <li class="li-menu"><a href="sites.php">Sites Interessantes</a></li>
                </ul>
            </div>
            <div id="content">
                <ul class="bxslider">
                    <li><img src="resources/img/home/fachada-detalhe.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/fachada.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/garcom.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/mesas.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/mesas2.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/escadas.jpg" width="750" height="500" style="border: 0;"></li>
                    <li><img src="resources/img/home/bandinha.jpg" width="750" height="500" style="border: 0;"></li>

                </ul>
				<div id="endereco">
					<h1>Contato</h1>
					Telefone: (51) 3445-3400 / (51) 9299-8575<br>
					Endereço: Rua Armando Seewald, 91. Centro. Presidente Lucena, RS.
				</div>
            </div>
			<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fkolonistenbr&amp;layout=standard&amp;show_faces=true&amp;colorscheme=dark&amp;width=200&amp;height=200" scrolling="no" frameborder="0" style="border:none; margin-left: 10px; overflow:hidden; width:200px; height:200px;" allowTransparency="true"></iframe>
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
