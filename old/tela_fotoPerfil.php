<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolher foto do perfil</title>

    <style>

        .TransicaoDeCores {
            background: linear-gradient(to bottom, #00CED1 0%, white 100%);
        }

        .button {
            display: inline-block;
            text-align: center;
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
            width: 200px;
            font-family: times;
        }

        .button:hover {background-color: #004d4d}

        .button:active {
            background-color: #004d4d;
            box-shadow: 0 5px #006666;
            transform: translateY(4px);
        }

        div.galeria {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 178px;
        }

        div.galeria:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }

        div.galeria img {
            width: 100%;
            height: 230px;
        }

        h1 {
            color: black;
            font-family: times new roman;
            font-size: 400%;
            text-align: center;
        }

        div.posicaoBotaoVoltar{
            position: absolute;
            left: 38.2%;
            top: 80%;
        }
        div.posicaoBotaoEnviar{
            position: absolute;
            left: 40%;
            top: 70%;
        }

    </style>

</head>
<body>

    <div id = fotoPerfil class = "TransicaoDeCores">

    <br>

    <h1>Escolha sua foto de perfil</h1>

    </div>

    <form>

        <div class="galeria">
    
        <img src="./Imagens/cachorro_marrom.png"><input type="radio" id="cachorro_marrom" name="gender" value="cachorro_marrom" required>
        
        </div>

        <div class="galeria">

        <img src="./Imagens/cachorro_vermelho.png"><input type="radio" id="cachorro_vermelho" name="gender" value="cachorro_vermelho" required>
        
        </div>
        
        <div class="galeria">

        <img src="./Imagens/vaca_rosa.png"><input type="radio" id="vaca_rosa" name="gender" value="vaca_rosa" required>
        
        </div>

        <div class="galeria">
        
        <img src="./Imagens/vaca_cinza.png"><input type="radio" id="vaca_cinza" name="gender" value="vaca_cinza" required>

        </div>

        <div class="galeria">
        
        <img src="./Imagens/porco_rosa.png"><input type="radio" id="porco_rosa" name="gender" value="vaca_cinza" required>

        </div>

        <div class="galeria">
        
        <img src="./Imagens/porco_marrom.png"><input type="radio" id="porco_marrom" name="gender" value="vaca_cinza" required>

        </div>

        <div class="galeria">
        
        <img src="./Imagens/passaro_verde.png"><input type="radio" id="passaro_verde" name="gender" value="vaca_cinza" required>

        </div>

        <div class="posicaoBotaoEnviar">

            <input type="submit" value="Confirmar foto" class= "button">

        </div>

    </form><br>

    <div class="posicaoBotaoVoltar">

        <a href="tela_perfil.php" class="button">Voltar</a>

    </div>

</body>
</html>