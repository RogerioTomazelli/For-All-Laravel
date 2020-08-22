<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For All Perfil</title>

    <style>

      .buttonEditarFoto {
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
            width: 262px;
            font-family: times;
        }

        .buttonEditarFoto:hover {background-color: #004d4d}

        .buttonEditarFoto:active {
                background-color: #004d4d;
                box-shadow: 0 5px #006666;
                transform: translateY(4px);
        }

        .buttonEditarDados {
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
            width: 165px;
            font-family: times;
        }

        .buttonEditarDados:hover {background-color: #004d4d}

        .buttonEditarDados:active {
            background-color: #004d4d;
            box-shadow: 0 5px #006666;
            transform: translateY(4px);
        }

        .buttonMateriaisEnviados {
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
            width: 165px;
            font-family: times;
        }

        .buttonMateriaisEnviados:hover {background-color: #004d4d}

        .buttonMateriaisEnviados:active {
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
            font-size: 500%;
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

        .caixas {
            width: 400px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 300px;
            position: absolute;
            top: 240px;
            left: 20%;
        }          
        
        img:hover {
            box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
        }

        div.dados {
            position: absolute;
            top: 232px;
            left: 45%;
            width: 445px;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        div.editarFoto {
            position: absolute;
            top: 570px;
            left: 20%;
        }   

        div.editarDados {
            position: absolute;
            top: 570px;
            left: 45%;
        }

        div.materiaisEnviados {
            position: absolute;
            top: 570px;
            left: 62%;
        }  

    </style>

</head>
<body>
    
        <div id = Perfil class = "TransicaoDeCores"><br>

        <h1>Perfil do usuário</h1><br>

        </div>

        <div class="editarFoto">

            <a href="tela_fotoPerfil.php" class="buttonEditarFoto">Editar foto</a>

        </div>

        <img src="./Imagens/perfil_semFoto.jpg">

        <div class="dados">

            <input type = "text" name = "nome" class = "caixas" placeholder = "Nome de usuário" required><br><br>
            <input type = "email" name = "email" class = "caixas" placeholder = "Email" required><br><br>
            <input type = "password" name = "senha" class = "caixas" placeholder = "Senha" required>

        </div>

        <div class="editarDados">

            <a href="tela_editarPerfil.php" class="buttonEditarDados">Editar dados</a>

        </div>

        <div class="materiaisEnviados">

        <a href="tela_materiaisEnviados.php" class="buttonEditarDados">Materiais enviados</a>

        </div>

</body>
</html>