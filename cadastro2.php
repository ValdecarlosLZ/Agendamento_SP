<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonho Pantaneiro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
        }

        header>h1 {
            font-size: 50px;
            margin-top: 0;
            color: rgb(96, 248, 248);
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);

        }

        header>h4 {
            color: black;
            margin-bottom: 0;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        body {
            background-image: url(https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/Pantanal_Mato_Grosso_Brasil.png);
            background-attachment: fixed;
            background-size: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-repeat: no-repeat;
        }

        body>form {
            display: flex;
            flex-direction: column;
            margin: auto;
            padding: 10px;
            background-color: rgba(194, 192, 192, 0.392);
            max-width: 600px;
            max-height: 2050px;
            width: 600px;
            height: auto;
            border-radius: 1vw;
            margin-top: 50px;
            margin-bottom: 30px;
        }

        form h1 {
            display: flex;
            margin: auto;
            text-align: center;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
            font-size: 25px;
        }

        form h3 {
            display: flex;
            margin: auto;
            font-size: 20px;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        form>fieldset {
            display: flexbox;
            margin: auto;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 3px;
            position: relative;

        }

        fieldset>#q1 {
            display: flex;
            margin: auto;

        }

        #q1 {
            max-width: 90px;
            max-height: 180px;
            width: 80px;
            height: 120px;
            position: relative;
            z-index: 1;
            margin-bottom: 0;
        }

        fieldset>h4 {
            text-align: center;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        fieldset>h5 {
            text-align: center;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        fieldset>#q2 {
            display: flex;
            margin: auto;
        }

        #q2 {
            max-width: 200px;
            max-height: 180px;
            width: 160px;
            height: 120px;
            position: relative;
            z-index: 2;
            margin-right: 300px;
            margin-top: 0;
        }

        fieldset>#q3 {
            display: flex;
            margin: auto;
        }

        #q3 {
            max-width: 200px;
            max-height: 180px;
            width: 160px;
            height: 120px;
            position: relative;
            z-index: 3;
            margin-left: 300px;
            margin-top: 0;
        }

        form>input {
            display: flex;
            margin: auto;
            max-width: 600px;
            max-height: 600px;
            text-align: center;
            width: 80px;
            height: 20px;
            border-radius: 7px;

        }

        #button {
            max-width: 200px;
            width: 60px;
            max-height: 100px;
            height: 25px;
            font-size: 12px;
            display: block;
            margin: auto;
            margin-top: 5px;
            margin-bottom: 5px;
            padding-top: 0.3px;
            border-radius: 1px;
            text-decoration: none;
            text-align: center;
            color: black;
            background-color: aliceblue;
            border-radius: 10px;
        }

        #button:hover {
            background-color: rgb(11, 48, 94);
            color: azure;
        }

        #quantidade {
            display: flex;
            margin: auto;
            max-width: 50px;
            width: 30px;
            border: 0.2px !important;
            border-radius: 10px;
            margin-bottom: 5px;
        }

        #pessoas {
            display: flex;
            margin: auto;
            border: 0.2px !important;
            border-radius: 5px;
            width: 30px;
            margin-bottom: 10px;
        }

        p {
            margin-left: 0;
            margin-bottom: 3px;
            text-align: center;
            color: aliceblue;
            background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5) 60%, rgba(255, 255, 255)100%);
            border: 2px solid black;
            border-start-end-radius: 10px;
            border-bottom: 0 !important
        }
    </style>
</head>

<body>
    <header>
        <h4>Pousada</h4>
        <h1>Sonho Pantaneiro</h1>
    </header>
    <form action="quartos.php" method="get">
        <h1>Cadastrar Agendamento</h1>
        <br>
        <h3>Estilo de quarto</h3>
        <?php
        include "quartos.php";

        foreach ($receber_cadastro as $item) {
            $Id = $item['Idquartos'];
            // $Imagem = $item['Imagem'];
            $Nome = $item['Nome'];
            $Capacidade = $item['Capacidade'];
            $Valor = $item['Valor'];
            ?>

            <fieldset>

                <?php
                require_once('canvas.php');

                switch ($Id) {
                    case 1:
                        echo '<img src="https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/quarto1.jpg" alt="Q1" style="width:120px;margin-left: 20%;margin-bottom: 5%;margin-top: 5%">';
                        break;
                    case 2:
                        echo '<img src="https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/quarto2.jpg" alt="Q2" style="width:180px;margin-left: 3%;margin-bottom: 5%;margin-top: 5%">';
                        break;
                    case 3:
                        echo '<img src="https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/quarto3.jpg" alt="Q3" style="width:180px;margin-left: 3%;margin-bottom: 5%;margin-top: 5%">';
                        break;
                }
                ?>

                <input style="margin-left: 47%;margin-bottom: 5px; border: none; " type="checkbox" name="check" value="<?php echo $Id; ?>">
                <p>
                    Nome:
                    <?php echo $Nome ?>
                </p>
                <p>
                    Capacidade:
                    <?php echo $Capacidade ?>
                </p>
                <p>
                    Valor:
                    <?php echo $Valor ?>
                </p>

                <input type="number" name="QT1" id="quantidade">
                <h3>Quantidade de pessoas</h3>
                <input type="number" id="pessoas" name="pessoa">
            </fieldset>

        <?php } ?>
        <input type="submit" id="button" value="Concluir">
    </form>
</body>

</html>

<img src="" alt="" style="align-self: center;">
