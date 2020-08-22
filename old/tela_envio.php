<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For All Envio de materiais</title>

    <style>

      .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 100%;
            cursor: pointer;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #009999;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #006666;
            width: 355px;
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

        img{
            position:absolute;
            right:0%;
            top:38%;
        }
 
        h1 {
            color: black;
            font-family: times new roman;
            font-size: 400%;
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
            float: right;
            width: 30%;
            padding: 10px;
            height: 300px;
        }

        .colunaBotoes {
            float: right;
            width: 30%;
            padding: 10px;
            height: 300px;
        }

        .conjuntoColunas:after {
            content: "";
            display: table;
            clear: both;
        }

        .caixas {
            width: 345px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    </style>

</head>

<body>
    
    <div id = "Envio" class = "TransicaoDeCores">

        <br>

        <h1>Enviar material</h1>

        <div class="conjuntoColunas">

        <div class="colunaDesenho">

            <img src = "./Imagens/cachorro_envio.png"
            alt = "Cachorro" height = "429" width = "510">

        </div>

        <div id = "Opções" class="colunaBotoes">
                
            <form action = "http://localhost/For_All/tela_envio.php" method="GET">

                <label><strong>Defina o tipo do material a ser enviado:</strong></label><br><br>
                <input type = "radio" value="v" required name = "tipo_material" id = "v">Videobook <br>
                <input type = "radio" value="a" required name = "tipo_material" id = "a">Audiobook <br><br>

                <input type = "text" id = "livro_nome" class = "caixas" required placeholder = "Digite o nome do livro"><br><br>

                <input type = "text" id = "autor_nome" class = "caixas" required placeholder = "Digite o nome do autor"><br><br>

                <label><strong>Selecione os arquivos a serem enviados (nomeie-os<br> de acordo com os capítulos):</strong></label><br><br>
                <input type = "file" id = "envio_mateiral" required multiple><br><br>

                <label><strong>Por fim, coloque uma foto da capa do livro:</strong></label><br><br>
                <input type = "file" accept=".png, .jpeg" required id = "envio_foto"><br><br>

                <input type = "submit" value = "Enviar arquivos" class = "button">

            </form>

        </div>

    </div>
    
</body>
</html>