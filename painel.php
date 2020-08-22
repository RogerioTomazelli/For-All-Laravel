<?php
include('verificarlogin.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>For All Menu</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>

    <style>
      
      .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 100%;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #009999;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #006666;
            width: 350px;
        }

      .button:hover {background-color: #004d4d}

      .button:active {
            background-color: #004d4d;
            box-shadow: 0 5px #006666;
            transform: translateY(4px);
        }

      .TransicaoDeCores {
            background: linear-gradient(to bottom, #00CED1 0%, white 100%);
        }
 
        h1 {
            color: black;
            font-family: times new roman;
            font-size: 700%;
            text-align: center;
        }
        
        p {
            color: black;
            font-family: times new roman;
            font-size: 100%;
            text-align: left;
        }

        label {
            font-size: 100%;
        }

        .colunaDesenho {
            float: left;
            width: 34.8%;
            padding: 10px;
            height: 300px;
        }

        .colunaBotoes {
            float: left;
            width: 25%;
            padding: 10px;
            height: 300px;
        }

        .colunaInformacoes {
            width: 30%;
            padding: 10px;
            height: 300px;
            position:absolute;
            right:3.5%;
            top:45%;
        }

        .informacoes{
            border-bottom: 2px solid lightgrey;
            text-align: justify;
        }

        .conjuntoColunas:after {
            content: "";
            display: table;
            clear: both;
        }
 
    </style>

    <div id = "Menu" class = "TransicaoDeCores">

    <br>

    <h1>For All</h1>

    <div class="conjuntoColunas">

        <div class="colunaDesenho">

            <img src = "./Imagens/cachorro_menu.png"
            alt = "Cachorro" height = "374.5" width = "420">

        </div>

        <div id = "Opções" class="colunaBotoes">
            
            <a href="tela_perfil.php"><button class = "button">Perfil</button></a><br><br>
            <a href=""><button class = "button">Audiobooks</button></a><br><br>
            <a href=""><button class = "button">Videobooks</button></a><br><br>
            <a href="tela_envio.php"><button class = "button">Enviar material</button></a><br><br>
            <a href="logout.php"><button class = "button">Sair</button></a>

        </div>

        <div class="colunaInformacoes">

            <div class="informacoes">

                <h3>Quando for gravar lembre-se:</h3>

            </div>
                    
            <div class="informacoes">

                <p>Fique em <strong>lugares sileciosos</strong> para evitar ruidos ou outros sons que possam atrapalhar 
                a qualidade do material.<br><br>
                Procure dividir os áudios/vídeos pelos <strong>capítulos</strong> do livro.<br><br>
                Este site tem como objetivo disponibilizar <strong>conteúdos infantis</strong>, 
                por isso tome cuidado com o que envia (materiais impróprios serão excluídos).</p>

            </div> 

        </div>

    </div>

  </body>
  
</html>
