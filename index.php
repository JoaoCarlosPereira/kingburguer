<!DOCTYPE html>
<html>
    <head>
        <title>King burger</title>
        <meta charset="UTF-8">
        <meta name="description" content="O mais maravilhoso hamburger de Iracemia de Bacon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css"/>
        <link href="images/logo.png" rel="shortcut icon">
        <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <nav>
                <a href="index.html" title="Home" class="logo">
                    <img src="images/kingburger.png" alt="King Burger" title="King burger"/>
                </a>
                <a href="#" id="menu">
                    <i class="fas fa-bars"></i>
                </a>

                <ul>
                    <li>
                        <a href="home" title="Home">Home</a>
                    </li>
                    <li>
                        <a href="sobre" title="Sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="cardapio" title="Cardápio">Cardápio</a>
                    </li>
                    <li>
                        <a href="contato" title="Contato">Contato</a>
                    </li>
                </ul>
            </nav>
            <div class="clear"></div>
            <div class="msg">
                <h1>Mega Max Burger</h1>
                <p>4 Hamburgueres de Carne, 4 Camadas de Bacon Crocante</p>
            </div>
            <img src="images/6.png" alt="Mega Max Burger" title="Mega Max Burger" class="max"/>
        </header>   
        <main>
            <?php
            //Recuperar o parametro
            if (isset($_GET['param'])) {
                $pagina = $_GET['param'];
            } else {
                $pagina = "home";
            }

            $pagina = "paginas/" . $pagina . ".php";

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'paginas/erro.php';
            }
            ?>
        </main>

        <footer>

        </footer>


        <script type="text/javascript">
            $("#menu").click(function () {
                $("nav ul").toggle();
            })
        </script>
    </body>
</html>

